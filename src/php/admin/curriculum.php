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
<link rel="stylesheet" type="text/css" href="main.css">
<title>添加课表</title>
</head>
<body>
<div id="title">
    <h1>添加课表</h1>
</div>
<div>
    <form name="addclass" action="helper.php" method="post">
    <table border="1" class="table">
        <tr>
            <td></td>
            <td>周一</td>
            <td>周二</td>
            <td>周三</td>
            <td>周四</td>
            <td>周五</td>
            <td>周六</td>
            <td>周日</td>
        </tr>
        <tr>
            <td>第一节（8:00-9:40）</td>
            <td><input  type="text" name="1x1"/></td>
            <td><input  type="text" name="2x1"/></td>
            <td><input  type="text" name="3x1"/></td>
            <td><input  type="text" name="4x1"/></td>
            <td><input  type="text" name="5x1"/></td>
            <td><input  type="text" name="6x1"/></td>
            <td><input  type="text" name="7x1"/></td>
        </tr><tr>
            <td>第二节（10:10-12:00）</td>
            <td><input  type="text" name="1x2"/></td>
            <td><input  type="text" name="2x2"/></td>
            <td><input  type="text" name="3x2"/></td>
            <td><input  type="text" name="4x2"/></td>
            <td><input  type="text" name="5x2"/></td>
            <td><input  type="text" name="6x2"/></td>
            <td><input  type="text" name="7x2"/></td>
        </tr><tr>
            <td>第三节（13:30-15:20）</td>
            <td><input  type="text" name="1x3"/></td>
            <td><input  type="text" name="2x3"/></td>
            <td><input  type="text" name="3x3"/></td>
            <td><input  type="text" name="4x3"/></td>
            <td><input  type="text" name="5x3"/></td>
            <td><input  type="text" name="6x3"/></td>
            <td><input  type="text" name="7x3"/></td>
        </tr><tr>
            <td>第四节（15:30-17:20）</td>
            <td><input  type="text" name="1x4"/></td>
            <td><input  type="text" name="2x4"/></td>
            <td><input  type="text" name="3x4"/></td>
            <td><input  type="text" name="4x4"/></td>
            <td><input  type="text" name="5x4"/></td>
            <td><input  type="text" name="6x4"/></td>
            <td><input  type="text" name="7x4"/></td>
        </tr><tr>
            <td>第五节（18:30-20:20）</td>
            <td><input  type="text" name="1x5"/></td>
            <td><input  type="text" name="2x5"/></td>
            <td><input  type="text" name="3x5"/></td>
            <td><input  type="text" name="4x5"/></td>
            <td><input  type="text" name="5x5"/></td>
            <td><input  type="text" name="6x5"/></td>
            <td><input  type="text" name="7x5"/></td>
        </tr>
    </table>
    <input type="hidden" name="type" value="addclass"/>
    <input type="submit" value="提交" id="submit_button"/>
    <input type="reset" value="重置"/>
    </form>
</div>
<a href="entry.php">< 返回</a>
</body>
</html>
