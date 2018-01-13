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