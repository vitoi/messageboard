
<?php
/**
 * Created by PhpStorm.
 * User: vito
 * Date: 2020/2/22
 * Time: 19:49
 */
    header('Content-type: text/html; charset=UTF-8');
    ?>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/index1.css">
        <title>我的留言板，添加留言</title>
    </head>
    <body background="./images/back.jpg" style="background-size: cover;">
    <h2>我的留言板</h2>
    <input type="button" value="添加留言" onclick="location.href='add.php'" class="button"/>
    <input type="button" value="查看留言" onclick="location.href='show.php'" class="button"/>
    <input type="button" value="退出登录" onclick="location.href='index.php'" class="button"/>
    <hr width="70%">
    <div class="k1">
        <form action="doAdd.php" method="post">
            <h1>Add A Message
                <span>What's New to Share with You</span>
            </h1>
            <label>
                <span>Your name: </span>
                <input type="text" name="author" placeholder="Your Full Name"/>
            </label>
            <label>
                <span>Title: </span>
                <input type="text" name="title" placeholder="Please input title"/>
            </label>
            <label>
                <span>Message: </span>
                <textarea name="content" placeholder="Your Message to Us"></textarea>
            </label>
            <div style="margin-left: 125px">
                <input type="submit" value="提交" class="submit"/>
                <input type="reset" value="重置" class="reset"/>
            </div>
        </form>
    </div>
    </body>
    </html>
