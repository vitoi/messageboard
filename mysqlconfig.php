<?php
    class DB{
        function connect(){
            @$link = mysqli_connect(DB_HOST, DB_USER, DB_PWD);
            mysqli_set_charset($link, DB_CHARSET);
            mysqli_select_db($link,DB_DBNAME) or die('数据库打开失败');
            if(mysqli_connect_errno()){
                die('数据库连接失败：'.mysqli_connect_errno());
            }
            return $link;
        }
        function insert($link, $sql){
            if(mysqli_query($link,$sql)){
                echo "<script language='javascript'>alert('注册成功！');location='index.php';</script>";
            }
            else{
                echo "Error insert data: ".$link->error;
            }
        }
        function CheckUser($link,$sql){
            $result = mysqli_query($link,$sql);
            $row = mysqli_num_rows($result);
            if($row!=0){
                return true;
            }
            else{
                return false;
            }
        }
        function insertl($link,$sql){
            if (mysqli_query($link, $sql)){
                echo "<script language='javascript'>alert('留言成功！');location='show.php'</script>";
            }
            else{
                echo "Error insert data: " . $link->error;
            }
        }
        function print1($link,$sql){
            $result = mysqli_query($link,$sql);
            $data = array();
            while($row=mysqli_fetch_array($result)){
                $data[] = $row;
            }
            if($data){
                return $data;
            }
            else{
                return false;
            }
        }
    }