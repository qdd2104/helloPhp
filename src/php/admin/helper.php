<?php
#登录
session_start();
if($_REQUEST['type']=="login"){
    $file = fopen('../../data/user.csv','r');
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
                    header("Location: ../user/list.php");
                    die();
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
<?php file_put_contents('../../data/user.csv', $_REQUEST["name"].",".$_REQUEST["pwd"].",".$_REQUEST["time"]."\n", FILE_APPEND|LOCK_EX); ?>
<?php } ?>

<?php
#保存成绩
if($_REQUEST["type"]=="score") {
file_put_contents('../../data/score.csv', $_REQUEST["name"].",".$_REQUEST["score"]."\n", FILE_APPEND|LOCK_EX);
} ?>

<?php
#保存课表
if($_REQUEST['type']=="addclass") {
$output = "";
//for($week=1;$week<=7;$week++) {
//    for($count=1;$count<=5;$count++) {
//        $output .= $_REQUEST[strval($week).'x'.strval($count)];
//        $output .= ',';
//    }
//    $output.="\n";
//}
    for($count=1;$count<=5;$count++) {
        for($week=1;$week<=7;$week++) {
            $output .= $_REQUEST[strval($week).'x'.strval($count)];
            $output .= ',';
        }
        $output.="\n";
    }
file_put_contents('../../data/class.csv', $output);
echo "添加课表成功";
echo "<a href=\"entry.php\">返回</a>";
}

?>

<?php
if($_REQUEST["type"]=="photo") {
    if($_FILES['photo']['name'] != '') {
        if($_FILES['photo']['error'] > 0) {
            echo "错误状态：".$_FILES['photo']['error'];
        } else {
            if($_FILES['photo']['type'] == 'image/jpeg' or $_FILES['photo']['type'] == 'image/pjpeg' or $_FILES['photo']['type'] == 'image/gif' && $_FILES['photo']['size'] < 20480){
                move_uploaded_file($_FILES['photo']['tmp_name'] , "../../data/uploads/" . $_FILES['photo']['name']);
                file_put_contents('../../data/photo.csv', "../../data/uploads/" . $_FILES['photo']['name'] ."\n", FILE_APPEND|LOCK_EX);
                echo "上传成功！";
            } else {
                echo "请上传小于2MB的jpeg或Gif类型的附件";
            }
        }
    } else {
        echo "请上传文件！";
    }
}
?>
