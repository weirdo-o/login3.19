<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/3/13
 * Time: 11:37
 */

header('content-type:text/html;charset=utf8');
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
if($user=='admin'){
    if($pass=='123456'){
        echo "登陆成功 <a href='main.html'>主页</a>";
    }else{
        echo "密码错误 <a href='index.html'>跳转回去</a>";
    }
}else{
    echo "账号错误 <a href='index.html'>跳转回去</a>";
}