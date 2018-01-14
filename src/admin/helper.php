<?php
#登录
session_start();
if($_REQUEST['type']=="login"){
    $file = fopen('user.txt','r');
    while ($data = fgetcsv($file)) {
        if($data[0]==$_REQUEST['name'])
        {
            if($data[1]==$_REQUEST['pwd'])
            {
                if($_REQUEST['name']=="admin") {
                    $_SESSION['type'] = "ADMIN";
                    header("Location: entry.php");
                    die();
                } else {
                    $_SESSION['type'] = "NORMAL";
                    echo "该接口仅支持管理员登录";
                }
                break;
            } else {
                echo "账号密码错误";
            }
        }
    }
}

?>

<?php if($_REQUEST["type"]=="adduser") { ?>
欢迎 <?php echo $_REQUEST["name"]; ?>!<br>
密码是 <?php echo $_REQUEST["pwd"]; ?>  ，请牢记。
<?php file_put_contents('user.txt', $_REQUEST["name"].",".$_REQUEST["pwd"].",".$_REQUEST["time"]."\n", FILE_APPEND|LOCK_EX); ?>
<?php } ?>

<?php
#保存成绩
if($_REQUEST["type"]=="score") {
file_put_contents('score.txt', $_REQUEST["name"].",".$_REQUEST["score"]."\n", FILE_APPEND|LOCK_EX);
} ?>

<?php
#保存课表
if($_REQUEST['type']=="addclass") {
$output = "";
for($week=1;$week<=7;$week++) {
    for($count=1;$count<=5;$count++) {
        $output .= $_REQUEST[strval($week).'x'.strval($count)];
        $output .= '|';
    }
}
file_put_contents('class.txt', $output."\n", FILE_APPEND|LOCK_EX);
echo "添加课表成功";
echo "<a href=\"entry.php\">返回</a>";
}

?>