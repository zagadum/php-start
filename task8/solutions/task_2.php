<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $sex=$_POST['sex'];
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
<form method="post" action="task_2.php">
    <p><input type="text" name="name" value="Ivan" required></p>
    <p><input type="radio" name="sex" value="мужчина" required>мужчина</p>
    <p><input type="radio" name="sex" value="женщина" >женщина</p>

    <p><input type="submit" name="submit" ></p>

</form>
</body>
</html>


<?php
    if ($sex=='мужчина'){
        echo 'Добро пожаловать мистер '.$name;
    }else{
        echo 'Добро пожаловать миссис '.$name;
    }
?>
