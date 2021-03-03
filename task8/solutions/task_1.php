<?php

//var_dump($_GET);
if(isset($_POST['submit'])){
    $one=intval($_POST['one']);
    $two=intval($_POST['two']);
    $three=intval($_POST['three']);
    $four=intval($_POST['four']);
    $five=intval($_POST['five']);
    $six=intval($_POST['six']);
    $seven=intval($_POST['seven']);
    $arr=array($one,$two,$three,$four,$five,$six,$seven);


}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="task_1.php">
        <p><input type="text" name="one" value="1"></p>
        <p><input type="text" name="two" value="2"></p>
        <p><input type="text" name="three" value="3"></p>
        <p><input type="text" name="four" value="4"></p>
        <p><input type="text" name="five" value="5"></p>
        <p><input type="text" name="six" value="6"></p>
        <p><input type="text" name="seven" value="7"></p>
        <p><input type="submit" name="submit" ></p>

    </form>
</body>
</html>

<?php
echo $one,$two,$three,$four,$five,$six,$seven;
echo '<br/>';
echo 'максимальное - '. max(array($one,$two,$three,$four,$five,$six,$seven));
echo '<br/>';
echo 'минимальное - '. min(array($one,$two,$three,$four,$five,$six,$seven));
echo '<br/>';
$sum=array_sum($arr)/count($arr);
echo 'среднее арифметическое значение - '. $sum;

?>