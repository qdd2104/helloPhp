<?php
/**
 * User: sky
 * Date: 2018/1/14
 * Time: 17:34
 */
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']=="NORMAL") {

    } else {
        echo "仅支持浏览者";
        die();
    }
} else {
    header("Location: ../../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="main.css">
<title>成绩</title>
</head>
<body background="../../picture/wood.jpg">
<div id="title">
    <h1>欢迎访问</h1>
</div>
<div id="content" onload="">

</div>
<a href="list.php">< 返回</a>
</body>
</html>


