<?php
/**
 * User: sky
 * Date: 2018/1/8
 * Time: 16:11
 */
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");
//A date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

$user=$_GET["user"];
$pwd=$_GET["pwd"];

$file = fopen('..\data\user.csv','r');
while ($data = fgetcsv($file)) { //每次读取CSV里面的一行内容
    if($data[0]==$user&&$data[1]==$pwd){
        echo "success";
    }
//    $goods_list[] = $data;
}
//print_r($goods_list);

/* foreach ($goods_list as $arr){
    if ($arr[0]!=""){
        echo $arr[0]."<br>";
    }
} */
//print_r(array_column($goods_list,0));

fclose($file);
?>