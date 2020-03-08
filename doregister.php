<?php
require_once "connect.php";
require_once "mysqlconfig.php";
$ma1 = new DB();
$link = $ma1->connect();
$id = $_POST['id'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
if($password!=$confirmPassword){
    echo "<script>alert('输入的密码和确认的密码不相等');location='register.php';</script>";;
}
$alt = "select * from user where username='$id'";
$res = $ma1->print1($link,$alt);
//var_dump($res);
if($id!=null&&$password!=null){
    $ma = new DB();
    $link = $ma->connect();
    $sql = "insert into user (username, password) values ('$id','$password')";
    for ($i=0;$i<count((array)$res);$i++) {
        if($id!=$res[$i]['username']){
            $res = $ma->insert($link,$sql);
        };
        if($id==$res[$i]['username']){
            echo "<script>alert('注册失败，该账号已被注册！');location='register.php';</script>";
        }
    }
}
else{
    echo "<script>alert('注册失败，请输入账号和密码');location='register.php';</script>";
}