<?php
/**
 * Created by PhpStorm.
 * User: jml
 * Date: 2016/9/14
 * Time: 15:08
 */
require_once dirname(__FILE__).'../config.php';


class weichat{

    public function callbackWeiChat(){
        $returnStr = $_GET['echostr'];
        if ($this->checkSignature()){
            echo $returnStr;
        }else{
            echo "<b>Error:</b>".$returnStr;
        }
    }

    private function checkSignature(){
        $signature = $_GET['signature'];
        $timestamp = $_GET['timestamp'];
        $nonce = $_GET['nonce'];

        $tmpArr = array(TOKEN,$timestamp,$nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if($tmpStr == $signature){
            return true;
        }else{
            return false;
        }
    }

}