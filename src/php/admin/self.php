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
<title>简历</title>
</head>
<body>
<div id="title">
    <h1>我的简历</h1>
</div>
<div id="self">
    <h1>何宇</h1>
    <hr />
    <a href="http://www.bupt.edu.cn" target="_blank"><cite>北京邮电大学</cite></a>
    <br>
    <q><big>厚德博学，敬业乐群。</big></q>
    <br>
    <a href="" target="_blank"><i>信息与通信工程学院电子信息工程专业</i></a>
    <br>
    <b>2014级<dfn>本科生</dfn></b>
    <hr />
    <p>2014年于<u>天津</u>参加高考，十分荣幸的考入了北京邮电大学。经过四年的深造，收货颇丰，通过学习<strong>数学分析</strong>、<strong>概率论</strong>等课程，获得了较多的数学知识。通过学习<strong>通信原理</strong>、<strong>信息论</strong>等专业课程，让我在逐渐熟悉了本专业的相关知识。</p>
    <h3>项目经历：</h3>
   <ol>
       <li>大创项目</li>
       <li>虚拟仪器设计大赛</li>
   </ol>
   <h3>工作经历：</h3>
   <ul>
    <li>大唐实习</li>
    <li>本校实验室实习</li>
    </ul>
    <abbr title="etcetera">etc.</abbr>
    <hr />
    <p>加权成绩：9/90<sup><u>1</u></sup></p>
    <p>六级成绩：521<sup><u>2</u></sup></p>
    <hr />
    <p><small>1. 该成绩根据2017年9月学校公布的保研成绩排名，本专业共90人，排名第九。</small></p>
    <p><small>2. 四级成绩520</small></p>
</div>
<div>
	<a href="index.html"><<返回首页</a>
</div>
<script>
    var position = 0;  
    function scroller()  
    {  
        if(position<500)  
        {  
            position++;  
            scroll(0,position);  
            clearTimeout(timer);  
            var timer = setTimeout("scroller()",10);  
        }  
    }  
    scroller(); 
</script>
</body>
</html>
