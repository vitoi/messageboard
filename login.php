<?php
require_once "connect.php";
require_once "mysqlconfig.php";
$id = $_POST['uid'];
session_start();
$_SESSION["uid"]=$id;
$password = $_POST['password'];
$ma1 = new DB();
    $link=$ma1->connect();
    $sql = "select * from user where username='$id' and password='$password'";
    $res = $ma1->CheckUser($link,$sql);
    if($res){
        header("Location: show.php");
    };
    if(!$res){
        echo "<script>alert('登录失败，账号或密码失败');location='index.php';</script>";
    };