<?php

$theAnswers=array(
    'option_1'=>2,
    'option_2'=>1,
    'option_3'=>3,
);

session_start();
$option_1=$_SESSION['option_1'];
$option_2=$_SESSION['option_2'];



if (isset($_POST['option_3'])){
    $option_3=intval($_POST['option_3']);
}



if ($option_1==$theAnswers['option_1']){
    echo 'Вопрос 1 - верно';
}else{
    echo 'Вопрос 1 - неверно';
}

echo '</br>';
echo '</br>';

if ($option_2==$theAnswers['option_2']){
    echo 'Вопрос 2 - верно';
}else{
    echo 'Вопрос 2 - неверно';
}

echo '</br>';
echo '</br>';

if ($option_3==$theAnswers['option_3']){
    echo 'Вопрос 3 - верно';
}else{
    echo 'Вопрос 3 - неверно';
}

?>