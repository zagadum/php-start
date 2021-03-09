<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'task_11-12');
mysqli_set_charset($connection, 'utf8');

$query = 'SELECT id, h1, short_content FROM news WHERE status="true";';
$result = mysqli_query($connection, $query);

$spisok='';
while($news = mysqli_fetch_array($result))
{
    $spisok.='<h1>'.$news['h1'].'</h1>'
        . '<p>'.$news['short_content'].'</p>'
        . '<a href="/news/view/'.$news['id'].'">Читать далее</a>';
}
echo $spisok;
?>