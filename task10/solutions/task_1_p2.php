<?php

if (isset($_POST['option_1'])) {
    session_start();
    $_SESSION['option_1'] = intval($_POST['option_1']);
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
<form method="post" action="task_1_p3.php">
    <h1>Вопрос 2</h1>
    <h2>Сколько будет 0.2км в дециметрах?</h2>

    <input type="radio" name="option_2" value="1" />200 дм<br><br>
    <input type="radio" name="option_2" value="2" />20000 дм<br><br>
    <input type="radio" name="option_2" value="3" />2000 дм<br><br>
    <input type="submit" value="Отправить" />


</form>
</body>
</html>
