<?php
/**
 * Created by PhpStorm.
 * User: jml
 * Date: 2016/9/14
 * Time: 15:50
 */
//require_once 'weixin/weichat.php';
//require_once dirname(__FILE__).'/config.php';


//$weixin = new weichat();


if (isset($_GET['echostr'])){
    $weixin-> callbackWeiChat();
}else{
    echo "这个就给你看看行不行！".dirname(__FILE__);
}