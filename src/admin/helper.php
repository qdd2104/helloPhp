<?php
#登录
if($_REQUEST['type']=="login"){
    $file = fopen('user.txt','r');
    while ($data = fgetcsv($file)) {
        if($data[0]==$_REQUEST['name']&&$data[1]==$_REQUEST['pwd']){
            if($_REQUEST['name']=="admin") {
                $_SESSION['type'] = "ADMIN";
                header("Location: entry.php");
                die();
            } else {
                $_SESSION['type'] = "NORMAL";
                echo "该接口仅支持管理员登录";
            }
        }
        else {
            echo "Error";
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