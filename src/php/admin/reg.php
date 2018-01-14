<?php
#判断登录
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
<title>注册</title>
</head>
<body>
<div id="title">
    <h1>欢迎注册</h1>
</div>
<div id="reg">
	<form name="input" action="helper.php" method="post">
		姓名：<input type="text" name="name" onblur="isInputEmpty();"/>
		<br>
		密码：<input type="password" name="pwd" onblur="isInputEmpty();"/> <br>
		<br>
		<input type="hidden" name="time" value="none" id="submit_date"/>
		<input type="hidden" name="type" value="adduser"/>
		<input type="submit" value="提交" id="submit_button" onclick="doSubmit()" disabled/>
		<input type="reset" value="重置"/>
		<p style="color: rgb(255,0,0)" id="notice">填写后提交</p>
	</form>
</div>
<a href="entry.php">< 返回</a>
</body>
<script>
function doSubmit() {
	if(isInputEmpty()) {
		return;
	}

	var date=new Date();
	document.getElementById("submit_date").value=date.getTime();
	alert("你的注册信息已经提交");
}
</script>
<script>
function isInputEmpty() {
	document.getElementById("submit_button").disabled=true;
	var input_list = ["name", "pwd"]
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
