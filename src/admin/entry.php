<?php
#判断登录
$_SESSION['type'] = "ADMIN";
if(isset($_SESSION['type'])){
    if($_SESSION['type']=="ADMIN") {
        
    } else {
        echo "仅支持管理员登录";
        die();
    }
    
} else {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="main.css">
<title>目录</title>
</head>
<body>
<div id="title">
    <h1>欢迎访问</h1>
</div>
<div id="content">
    <a href="reg.html">添加新用户</a><br>
    <a href="score.php">录入成绩</a><br>
    <a href="curriculum.php">录入课程</a><br>
    <a href="self.html">网站作者介绍</a><br>
    <a href="photo.php">上传测试图片</a>
</div>
<a href="#">< 返回</a>
</body>
</html>
