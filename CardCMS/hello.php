<?php
/**
 * @copyright (C)2016-2099 Hnaoyun Inc.
 * @author XingMeng
 * @email hnxsh@foxmail.com
 * @date 2016年11月5日
 *  管理后台入口文件
 */
// define('DEBUG', true);

// ====== 入口密码保护 ======
session_start();

$entry_key = 'sunrise1226'; // 设置你的入口密码

// 是否已验证通过（session 或 cookie）
$entryPassed = isset($_SESSION['entry_passed']) || (isset($_COOKIE['entry_passed']) && $_COOKIE['entry_passed'] === '1');

// 如果没有验证通过，则检查 key
if (!$entryPassed) {
    if (isset($_GET['key']) && $_GET['key'] === $entry_key) {
        $_SESSION['entry_passed'] = true;
        setcookie('entry_passed', '6', time() + 3600, '/'); // 保存 6 小时

        // 重定向，去掉 URL 中的 key 参数
        $url = strtok($_SERVER["REQUEST_URI"], '?');
        $query = $_GET;
        unset($query['key']);

        if (!empty($query)) {
            $url .= '?' . http_build_query($query);
        }

        header("Location: $url");
        exit;
    } else {
        http_response_code(404);
        exit('404 Not Found');
    }
}

// 定义为入口文件
define('IS_INDEX', true);

// 入口文件地址绑定
define('URL_BIND', 'admin');

// PHP版本检测
if (PHP_VERSION < '5.3') {
    header('Content-Type:text/html; charset=utf-8');
    exit('您服务器PHP的版本太低，程序要求PHP版本不小于5.3');
}

// 引用内核启动文件
require dirname(__FILE__) . '/core/start.php';
