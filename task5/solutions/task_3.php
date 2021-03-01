<?php

$arr=array(
    'Кнопка 10',
    'Кнопка 9',
    'Кнопка 8',
    'Кнопка 7',
    'Кнопка 6',
    'Кнопка 5',
    'Кнопка 4',
    'Кнопка 3',
    'Кнопка 2',
    'Кнопка 1'
);
natsort ($arr);
print_r($arr);


foreach ($arr as $value) {
    ?>
    <ul>
        <li><a href="#"><?php echo $value; ?></a></li>
    </ul>
<?php
}
?>

