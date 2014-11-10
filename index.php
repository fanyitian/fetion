<?php
require_once(dirname(__FILE__) . '/fetion/fetion.php');
use Fetion\Fetion;

$mobile = !empty($_GET['mobile']) ? $_GET['mobile'] : '158xxxxxxxx'; //给xxx好友发送
$message = !empty($_GET['msg']) ? $_GET['msg'] : '测试msg'; //信息

$result = Fetion::Instance()->send($mobile, $message);
