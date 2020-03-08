<?php
/**
 * Created by PhpStorm.
 * User: vito
 * Date: 2020/2/22
 * Time: 20:47
 */
    header("content-type: text/html;charset=utf-8");
    session_start();
    require_once "connect.php";
    require_once "mysqlconfig.php";
    $ma1 = new DB();
    $link = $ma1->connect();
    $id = $_GET["id"];
    if($link){
        $sql = "delete from message where id=$id";
        $que = mysqli_query($link,$sql);
        if($que){
            echo "<script>alert('删除成功，返回首页');location='show.php';</script>";
        }else{
            echo "<script>alert('删除失败');location='show.php';</script>";
            exit;
        }
    }