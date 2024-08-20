<?php

function isUrlAvailable($url, $timeout = 5) {
    $urlParts = parse_url($url);
    $host = $urlParts['host'];
    $port = isset($urlParts['port']) ? $urlParts['port'] : 80;

    $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
    if ($fp) {
        fclose($fp);
        return true;
    }
    return false;
}

$id = $_GET['id'] ?? null; // 使用null合并运算符提供默认值以防未设置id

$primaryDomain = 'https://cdn.hapuren.cn';
$secondaryDomain = 'https://wp.hapuren.cn';

// 检查主域名是否可用
if (isUrlAvailable($primaryDomain)) {
    $domainToUse = $primaryDomain;
} else {
    $domainToUse = $secondaryDomain;
}

if ($id == 1) {
    $su = rand(1, 72);
    $su = intval($su);
    $url = $domainToUse . "/d/123pan/picture-mp/im$su.jpg";
    if (isUrlAvailable($url)) {
        header("Location: $url");
        exit;
    }
    // 如果主URL和备用URL都不可访问，可以在这里处理错误或提供备用逻辑
    // 例如，记录日志、显示错误消息等
}

if ($id == 2) {
    $pc = rand(1, 61);
    $pc = intval($pc);
    $url = $domainToUse . "/d/123pan/picture-pc/$pc.jpg";
    if (isUrlAvailable($url)) {
        header("Location: $url");
        exit();
    }
    // 同上，处理URL不可访问的情况
}

// 如果id不是1或2，或者URL都不可达，可以在这里添加其他逻辑
?>