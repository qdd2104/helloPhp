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
    <input type="submit" value="提交" id="submit_button" onclick="doSubmit()" disabled/>
    <input type="reset" value="重置"/>
    <p style="color: rgb(255,0,0)" id="notice">填写后提交</p>
    </form>
</div>
<a href="#">< 返回</a>
</body>
<script>
function doSubmit() {
	if(isInputEmpty()) {
		return;
	}

	alert("成绩已经提交");
}
</script>
<script>
function isInputEmpty() {
	document.getElementById("submit_button").disabled=true;
	var input_list = ["name", "score"]
	for(i in input_list) {
		var nodes = document.getElementsByName(input_list[i]);
		for(j=0; j<nodes.length;j++ ) {
			if(nodes[j].value == null || nodes[j].value == "") {
				document.getElementById("notice").innerText=nodes[j].name+"未填写，请填写后提交";
				return true;
			}
		}
	}

	document.getElementById("notice").innerText="均已填写，请提交";
	document.getElementById("submit_button").disabled=false;

	return false;
}

document.getElementById("submit_button").disabled=true;
</script>
</html>
