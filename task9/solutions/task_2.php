<?php
$counter = $_COOKIE["counter"];
if (!isset($counter)){
$counter = date('Y-m-d H:i:s');
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

        <input type="submit" name="submit" value="Узнать время">

    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    echo $counter;
}
?>