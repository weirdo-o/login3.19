<?php
/**
 * Created by PhpStorm.
 * User: ow
 * Date: 2018/3/20
 * Time: 16:30
 */

header('content-type:text/html;charset=utf8');
$zhanghao=$_POST['zhanghao'];
$pass=$_POST['pass'];

//建立数据库连接
$db=new mysqli("localhost","root","","wui1711");

//定义要做的事
$sql="select zhanghao,pass from user where zhanghao='$zhanghao'";
$result=$db->query($sql);
//数据库操作的结果是以结果集的形式存在

$row=$result->fetch_assoc();
if($row){
    if($row['pass']==$pass){
        $mess= '登录成功';
        $href='main.php';
    }else{
        $mess='密码错误';
        $href='login.html';
    }
}else{
    $mess='账号不存在';
    $href='login.html';
}

include_once 'mess.html';
//
//fetch_assoc()  关联数组形式输出（一般用）
//fetch_array()   数组形式输出
//fetch_row()   索引数组形式输出