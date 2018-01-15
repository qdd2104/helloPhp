<?php
/**
 * User: sky
 * Date: 2018/1/14
 * Time: 21:19
 */
if($_REQUEST["type"]=="searchScore") {
    $sbu=$_REQUEST["class_name"];
    $file = fopen('../../data/score.csv','r');
    $a="<p>没有本门课程</p>";
    while ($data = fgetcsv($file)) {
        if($data[0]==$sbu){
            $a="<p>本门课程的成绩是".$data[1]."</p>";
        }
    }
    echo $a;
    echo "<a href='scoreList.php'>< 返回</a>";
}
?>

<?php
if($_REQUEST["type"]=="searchClass") {
    $week=$_REQUEST["week"];
    $count=$_REQUEST["count"];
    $file = fopen('../../data/class.csv','r');
    $a="<p>本节课没有内容</p>";
    $indexCount=0;
    while ($data = fgetcsv($file)) {
        if($indexCount+1==$count){
            if($data[$week-1]!=""){
                $a="<p>本节课程是".$data[$week-1]."</p>";
            }
        }
        $indexCount+=1;
    }
    echo $a;
    echo "<a href='classList.php'>< 返回</a>";
}
?>
