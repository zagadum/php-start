<?php

session_start();
if (!isset($_SESSION["ball"])){
//    $_SESSION["ball"]=0;

}

?>


<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="task_1.php">
    <?php

    $connection = mysqli_connect('localhost', 'root', 'root', 'task_10');
    $lastQuestion=1;
    $otvet=0;
    if(isset($_POST['lastQuestion'])){
        $lastQuestion=$_POST['lastQuestion']+1;
        if(isset($_POST['last_id'])) {


            $poisk="SELECT is_corect FROM otvet WHERE  question_id=".$_POST['last_id'].' AND `id` ='.$_POST['option_1'] ;
//            var_dump($poisk);
            $poisk = mysqli_query($connection, $poisk);
            $row = mysqli_fetch_array($poisk);
//            var_dump($row);



            if ($row['is_corect']){
                $_SESSION["ball"]+=1;
            }

        }
    }



    $query_vopros = 'SELECT text,id FROM vopros WHERE sort_index='.$lastQuestion;

    $result = mysqli_query($connection, $query_vopros);
    $row = mysqli_fetch_array($result);
    if(!empty($row)){
    $last_id = $row['id'];
    $vopros ='<h1>'.$row['text'].'</h1>';

    echo $vopros;

    $query_otvet = 'SELECT * FROM `otvet` WHERE `question_id` = '.$row['id'];
    $result = mysqli_query($connection, $query_otvet);

    $otvet='';
    while($row = mysqli_fetch_array($result))
    {
        $otvet.='<p><input type="radio"name="option_1" value="'.$row['id'].'"  />'." ".$row['text'].'</p>';
    }
    echo $otvet;



    ?>
    <input type="hidden" name="lastQuestion" value="<?php echo $lastQuestion; ?> "/>
    <input type="hidden" name="last_id" value="<?php echo $last_id; ?> "/>
    <input type="submit" value="Отправить" />
</form>




<?php
    }
    else{
echo "Количество правильных ответов= ".$_SESSION['ball'].'<hr><br>'."<button><a href=\"task_1.php\">restart</a></button>";


        $_SESSION['ball']=0;
//session_destroy();
    }

?>


</body>
</html>