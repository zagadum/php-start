<?php

if (isset($_POST['option_2'])) {
    session_start();
    $_SESSION['option_2'] = intval($_POST['option_2']);
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
<form method="post" action="task_1_p_end.php">
    <h1>Вопрос 3</h1>
    <h2>Самая длинная в мире река?</h2>

    <input type="radio" name="option_3" value="1" />Янцзи<br><br>
    <input type="radio" name="option_3" value="2" />Нил<br><br>
    <input type="radio" name="option_3" value="3" />Амазонка<br><br>
    <input type="submit" value="Отправить" />


</form>
</body>
</html>
