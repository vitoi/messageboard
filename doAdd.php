<?php
/**
 * Created by PhpStorm.
 * User: vito
 * Date: 2020/2/22
 * Time: 20:13
 */
    session_start();
    $id=$_SESSION["uid"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $_SESSION["author"] = $author;
    $content = $_POST["content"];
    $ip = $_SERVER["REMOTE_ADDR"];

    require_once "connect.php";
    require_once "mysqlconfig.php";
    $ma1 = new DB();
    $link = $ma1->connect();
    $sql = "insert into message (user, title, author, ip, message, time) values('$id','$title','$author','$ip','$content',now())";
    if($title!=null){
        if($author!=null){
            $res=$ma1->insertl($link,$sql);
        };
        if($author==null){
            echo "<script>alert('请输入留言者!');location='add.php';</script>";
        };
    };
    if($title==null){
        echo "<script>alert('请输入留言标题');location='add.php';</script>";
    };
