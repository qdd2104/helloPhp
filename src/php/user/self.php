<?php
/**
 * User: sky
 * Date: 2018/1/15
 * Time: 17:14
 */
session_start();
if(isset($_SESSION['type'])){
    if($_SESSION['type']=="NORMAL") {

    } else {
        echo "仅支持浏览者登录<br>";
        echo "<a href=\"login.php\">重新登录</a>";
        die();
    }

} else {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>自我介绍</title>
    <link href="../../css/main.css" rel="stylesheet" type="text/css">
</head>
<body background="../../picture/wood.jpg">
<div>
    <h2 class="tSet"><i>自我介绍</i></h2>
    <p>
        <big><b>&nbsp;&nbsp;&nbsp;&nbsp;我是</b></big>一个对理想有着执着追求的人，<u id="wd">坚信是金子总会发光</u>。为人热情，活泼，大方， 本人好学上进，诚信、敬业、责任心强，有强烈的团体精神，对工作认真积极，严谨负责.<br>
        &nbsp;&nbsp;&nbsp;&nbsp;本人性格内外结合,适应能力强，为人诚实，<img id="headImg" src="../../picture/head.jpg" hspace="20 px" vspace="20 px"/>有良好的人际交往能力，具备相关的专业知识和认真。细心、耐心的工作态度及良好的职业道德修养。相信团体精神的我对工作认真负责，总希望能把事情做得更好! 性格开朗，对文字语言和数字敏感，对生活充满希望，对工作充满热情! 能在短期间内适应新环境，有强烈的品质意识;对工作认真负责，上进心强! 懂电脑基本操作，喜欢<small><s>捣乱</s></small>创新<big>!!!!</big><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<em><strong>我的理念是：</strong></em>在年轻的季节我甘愿吃苦受累，只愿通过自己富有激情、积极主动的努力实现自身价值并在工作中做出最大的贡献：<br>
    <ul>
        <li>作为初学者，我具备出色的学习能力并且乐于学习、敢于创新，不断追求卓越;</li>
        <li>作为参与者，我具备诚实可信的品格、富有团队合作精神;</li>
        <li>作为领导者，我具备做事干练、果断的风格，良好的沟通和人际协调能力。</li>
    </ul>受过系统的相关专业知识训练，有很强的忍耐力、意志力和吃苦耐劳的品质，对工作认真负责，积极进取，个性乐观执着，敢于面对困难与挑战。

    </p>

</div>
</div>
<a href="list.php">< 返回</a>
</body>
</body>
</html>
