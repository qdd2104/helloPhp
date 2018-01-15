<?php
/**
 * User: sky
 * Date: 2018/1/14
 * Time: 17:34
 */
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']=="NORMAL") {
        $file = fopen('../../data/class.csv','r');
        $c=1;
        while ($data = fgetcsv($file)) {
            $a.="<tr><td>第".$c."节</td>";
            for ($x=0; $x< count($data); $x++) {
                $content=$data[$x];
                if($content==""){
                    $a.="<td></td>";
                }else{
                    $a.="<td>".$content."</td>";
                }
            }
            $a.="</tr>";
            $c+=1;
        }
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
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <title>成绩</title>
</head>
<body background="../../picture/wood.jpg">
<div id="title" align="center">
    <h1>曹慎凯的课程表</h1>
    <table>
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
        <?php echo $a ?>
    </table>
</div>
<div id="content">
    <h2>请输入要查找的课程</h2>
    <form name="showClass" action="helper.php" method="post">
        日期：<input type="text" name="week" id="week" onblur="checkOut()"/>
        <br>
        课次：<input type="text" name="count" id="count" onblur="checkOut()"/>
        <br>
        <input type="hidden" name="type" value="searchClass">
        <input type="submit" value="提交" id="submit_button" onclick="doSubmit()" disabled/>
        <input type="reset" value="重置"/>
        <p style="color: rgb(255,0,0)" id="notice">填写后提交</p>
    </form>
</div>
<a href="list.php">< 返回</a>
</body>
<script>
    function doSubmit() {
        if(isInputEmpty()) {
            return;
        }
    }

    function checkOut() {
        var week = document.getElementById("week");
        var count =document.getElementById("count");
        if(week.value == null || week.value == ""||count.value == null || count.value == "") {
            document.getElementById("notice").innerText=nodes[j].name+"未填写，请填写后提交";
            return true;
        }else{
            document.getElementById("notice").innerText="均已填写，请提交";
            document.getElementById("submit_button").disabled=false;
            return false;
        }
    }

    document.getElementById("submit_button").disabled=true;
</script>
</html>



