<?php
/**
 * @copyright (C)2016-2099 Hnaoyun Inc.
 * @author XingMeng
 * @email hnxsh@foxmail.com
 * @date 2017年3月13日
 *  首页模型类
 */
namespace app\admin\model;

use core\basic\Model;

class IndexModel extends Model
{

    public function bindTotp($username)
    {
        require_once ROOT_PATH . '/core/plugin/totp/lib/GoogleAuthenticator.php';

        // 查询用户
        $user = parent::table('ay_user')
            ->where("username='$username'")
            ->where('status=1')
            ->find();

        if (!$user) {
            return '用户不存在';
        }

        $indexModel = new IndexModel();

        // 使用用户名 + 加密密码作为生成 secret 的原材料
        $seed = $username . ':' . $user->password; // 你可以用其他分隔符
        $secret = substr($indexModel->base32_encode(hash_hmac('sha1', $seed, 'CardKing', true)), 0, 16);

        // 生成二维码
        $ga = new \PHPGangsta_GoogleAuthenticator();
        $qrCodeUrl = $ga->getQRCodeGoogleUrl('CardKingPbootCMS-' . $user->username, $secret);

        return $qrCodeUrl;
    }


    public function base32_encode($data)
    {
        $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
        $binary = '';
        foreach (str_split($data) as $char) {
            $binary .= str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT);
        }

        $fiveBitBinaryArray = str_split($binary, 5);
        $base32 = '';
        foreach ($fiveBitBinaryArray as $bin) {
            $base32 .= $alphabet[bindec(str_pad($bin, 5, '0'))];
        }

        return $base32;
    }

    public function HandleUser($username)
    {
         $user = parent::table('ay_user')
                            ->where("username='$username'")
                            ->where('status=1')
                            ->find();
         return $user;
    }

    // 保存 secret
    public function SaveAuthener($username,$secret)
    {
        parent::table('ay_user')
            ->where("username='$username'")
            ->update(['google_code' => $secret]);
    }

    // 检查用户账号密码
    public function login($where)
    {
        // 执行登录
        $result = parent::table('ay_user')->field('id,ucode,username,realname,google_code')
            ->where($where)
            ->where('status=1')
            ->find();
        if ($result) { // 登录成功
            // 判断验证码是否存在
            $inputCode = post('qrcode'); // 登录页面输入的验证码

            if (!empty($result->google_code)) {
                require_once ROOT_PATH . '/core/plugin/totp/lib/GoogleAuthenticator.php';
                $ga = new \PHPGangsta_GoogleAuthenticator();

                 $indexModel = new IndexModel();

                 $secret = $result->google_code;

                 $check = $ga->verifyCode($secret, $inputCode, 1);
                 if (!$check) {
                    json(201, '谷歌验证码错误');
                 }
            }
            $this->updateLogin($where); // 执行更新登录记录
            $menus = $this->getUserMenu($result->ucode); // 用户菜单
            $result->menus = get_tree($menus, 0, 'mcode', 'pcode'); // 用户菜单树
            $result->rcodes = $this->getUserRcode($result->ucode); // 用户角色
            $result->levels = $this->getUserLevel($result->ucode); // 用户权限
            
            $acodes = $this->getUserAcode($result->ucode); // 获取用户区域
            $areas = $this->getAreas();
            $first_acode = $areas[0]->acode;
            if (in_array($first_acode, $acodes)) {
                array_unshift($acodes, $first_acode);
                $acodes = array_unique($acodes);
            }
            $result->acodes = $acodes;
            $result->area_map = get_mapping($areas, 'name', 'acode'); // 区域代码名称映射表
            $result->area_tree = $this->getUserAreaTree($areas, 0, 'acode', 'pcode', 'son', $result->acodes); // 当前用户的区域树
            return $result;
        } else {
            return false;
        }
    }

    // 用户登录成功后更新登录信息
    private function updateLogin($where)
    {
        $data = array(
            'last_login_ip' => ip2long(get_user_ip()),
            'login_count' => '+=1'
        );
        return parent::table('ay_user')->where($where)
            ->autoTime()
            ->update($data);
    }

    // 获取用户菜单列表
    public function getUserMenu($ucode)
    {
        if ($ucode == '10001') { // 管理员获所有区域
            $field = array(
                'id',
                'mcode',
                'pcode',
                'name',
                'url',
                'shortcut',
                'ico',
                'sorting',
                'status'
            );
            $order = array(
                'sorting',
                'pcode',
                'id'
            );
            $result = parent::table('ay_menu')->distinct()
                ->field($field)
                ->order($order)
                ->select();
        } else {
            $table = array(
                'ay_user',
                'ay_user_role',
                'ay_role',
                'ay_role_level',
                'ay_menu'
            );
            $field = array(
                'ay_menu.id',
                'ay_menu.mcode',
                'ay_menu.pcode',
                'ay_menu.name',
                'ay_menu.url',
                'ay_menu.shortcut',
                'ay_menu.ico',
                'ay_menu.sorting',
                'ay_menu.status'
            );
            $where = array(
                "ay_user.ucode='$ucode'",
                "ay_user.ucode=ay_user_role.ucode",
                "ay_role.rcode=ay_user_role.rcode",
                "ay_role.rcode=ay_role_level.rcode",
                "ay_menu.url=ay_role_level.level"
            );
            $order = array(
                'ay_menu.sorting',
                'ay_menu.pcode',
                'ay_menu.id'
            );
            $result = parent::table($table)->distinct()
                ->field($field)
                ->where($where)
                ->order($order)
                ->select();
        }
        return $result;
    }

    // 获取用户的角色代码
    public function getUserRcode($ucode)
    {
        return parent::table('ay_user_role')->where("ucode='$ucode'")->column('rcode');
    }

    // 获取用户权限列表
    public function getUserLevel($ucode)
    {
        $table = array(
            'ay_user',
            'ay_user_role',
            'ay_role',
            'ay_role_level'
        );
        $where = array(
            "ay_user.ucode='$ucode'",
            "ay_user.ucode=ay_user_role.ucode",
            "ay_role.rcode=ay_user_role.rcode",
            "ay_role.rcode=ay_role_level.rcode"
        );
        return parent::table($table)->distinct()
            ->where($where)
            ->column('ay_role_level.level');
    }

    // 获取用户可管理的区域代码
    public function getUserAcode($ucode)
    {
        if ($ucode == '10001') { // 管理员获所有区域
            $result = parent::table('ay_area')->distinct()->column('acode');
        } else {
            $table = array(
                'ay_user',
                'ay_user_role',
                'ay_role',
                'ay_role_area',
                'ay_area'
            );
            $where = array(
                "ay_user.ucode = '$ucode'",
                "ay_user.ucode=ay_user_role.ucode",
                "ay_role.rcode=ay_user_role.rcode",
                "ay_role.rcode=ay_role_area.rcode",
                "ay_area.acode=ay_role_area.acode"
            );
            $result = parent::table($table)->distinct()
                ->where($where)
                ->column('ay_area.acode');
        }
        return $result;
    }

    // 获取区域列表
    public function getAreas()
    {
        $result = parent::table('ay_area')->field('pcode,acode,name,is_default')
            ->order('is_default DESC,pcode,acode')
            ->select();
        return $result;
    }

    // 生成授权的区域树
    public function getUserAreaTree($data, $tid, $idField, $pidField, $sonName = 'son', $valid = array())
    {
        $tree = array();
        foreach ($data as $key => $value) {
            if ($value->$pidField == "$tid") { // 父亲找到儿子
                $value->$sonName = $this->getUserAreaTree($data, $value->$idField, $idField, $pidField, $sonName, $valid);
                if ($value->$sonName) {
                    $tree[] = $value;
                } elseif (in_array($value->$idField, $valid)) {
                    $tree[] = $value;
                }
            }
        }
        return $tree;
    }

    // 检查当前用户密码
    public function checkUserPwd($password)
    {
        return parent::table('ay_user')->field('id')
            ->where("id=" . session('id') . " AND password='$password'")
            ->find();
    }

    // 修改当前用户信息
    public function modUserInfo($data)
    {
        // ✅ 清除绑定的 Google 验证器
        $username = session('username');
        parent::table('ay_user')->where("username='$username'")->update(['google_code' => null]);
        return parent::table('ay_user')->where("id=" . session('id'))->update($data);
    }

    // 获取用户信息
    public function getUserInfo($ucode)
    {
        $result = parent::table('ay_user')->field('id,ucode,username,realname,last_login_ip,update_time,login_count')
            ->where("ucode='$ucode'")
            ->find();
        return $result;
    }
}