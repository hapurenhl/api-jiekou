[English-英文](./README-en.md)/[Chinese-中文](./README.md)
# API接口安装及使用

## 安装

直接把'index.php'放到自己服务器根目录中

## 使用

然后访问'域名/index.php?id=1'或'域名/index.php?id=2'

##注意

- 'id=1'默认为适配手机二次元照片
- 'id=2'默认为适配电脑的二次元图片

# 高阶玩法

## 讲解

本接口使用了文件托管

里面

```php

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

$primaryDomain = 'https://wp.hapuren.cn';
$secondaryDomain = 'https://wp.hapuren.online';

```
是用于双网站联通测试，防止托管爆掉，无法使用接口

### 剩下自己探究
#### QQ:754195502

