<?php
/**
 * User: sky
 * Date: 2018/1/14
 * Time: 17:34
 */
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']=="NORMAL") {
        $file = fopen('../../data/photo.csv','r');
        while ($data = fgetcsv($file)) {
            $a.='<tr><a href="'.$data[0].'">'.$data[0]."</a></tr><br>";
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
    <h1>本地图册</h1>
    <table>
        <tr>图片列表</tr><br>
        <?php echo $a ?>
    </table>
</div>
<a href="list.php">< 返回</a>
</body>
</html>



