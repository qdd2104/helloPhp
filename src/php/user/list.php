<?php
#判断登录
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']=="NORMAL") {

    } else {
        echo "仅支持管理员登录<br>";
        header("Location: entry.php");
        die();
    }
} else {
    header("Location: ../../login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="main.css">
<title>目录</title>
</head>
<body background="../../picture/wood.jpg">
<div id="title">
    <h1>欢迎访问</h1>
</div>
<div id="content">
    <a href="scoreList.php">显示成绩</a><br>
    <a href="curriculum.php">显示课程</a><br>
    <a href="self.html">显示作者介绍</a><br>
    <a href="photo.php">显示图片</a>
</div>
<a href="#">< 返回</a>
</body>
</html>
