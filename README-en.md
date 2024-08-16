# API interface installation and usage

## Installation

Directly place 'index. php' in the root directory of your own server

## Use

Then access the 'domain name/index. php'? Id=1 'or' Domain name/index. php '? id=2'

## Attention

-'id=1' is the anime photo of the mobile phone by default
-'id=2' defaults to the anime image of the computer

# Advanced gameplay

## Explain

This interface uses file hosting

Inside the file

```php

function isUrlAvailable($url, $timeout = 5) {
$urlParts = parse_url($url);
$host = $urlParts['host'];
$port = isset($urlParts['port']) ? $ urlParts['port'] : 80;

$fp = @fsockopen($host, $port, $errno, $errstr, $timeout);
if ($fp) {
fclose($fp);
return true;
}
return false;
}

$id = $_GET['id'] ??  Null;//Use null merge operator to provide default value in case id is not set

$primaryDomain = ' https://wp.hapuren.cn ';
$secondaryDomain = ' https://wp.hapuren.online ';

```
It is used for dual website connectivity testing to prevent hosting crashes and inability to use interfaces

###Explore on your own
#### QQ:754195502

