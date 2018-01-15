<?php
#判断登录
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']=="ADMIN") {
        
    } else {
        echo "仅支持管理员登录<br>";
        echo "<a href=\"login.php\">重新登录</a>";
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
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<title>上传图片</title>
</head>
<body>
<div id="title">
    <h1>上传图片</h1>
</div>
<div id="content">
    <form name="input" action="helper.php" method="post" enctype="multipart/form-data">
    图片：<input type="file" name="photo"/> <br>
    <input type="hidden" name="type" value="photo"/>
    <input type="submit" value="提交" id="submit_button"/>
    <input type="reset" value="重置"/>
    </form>
</div>
<a href="entry.php">< 返回</a>
</body>
</html>
