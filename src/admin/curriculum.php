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
    <form name="input" action="helper.php" method="post">
    科目：<input type="text" name="name" onblur="isInputEmpty();"/>
    <br>
    成绩：<input type="text" name="score" onblur="isInputEmpty();"/> <br>
    <br>
    <input type="hidden" name="type" value="score"/>
    <input type="submit" value="提交" id="submit_button"/>
    <input type="reset" value="重置"/>
    <p style="color: rgb(255,0,0)" id="notice">填写后提交</p>
    </form>
</div>
<a href="#">< 返回</a>
</body>
</html>
