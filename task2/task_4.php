<?php

$arr=array(
    "element" => 1, 2, 3, 4, 5,);
print_r($arr[2]);/*вывели елемент c индексом 2*/
echo '</br>';
echo '</br>';
print_r($arr);/* вывели полностю масив 1*/
echo '</br>';
echo '</br>';
echo count($arr); /*количество элементов в массиве*/
echo '</br>';
echo '<hr/>';









$arr2=array(6,7,8, 9,10,);
print_r($arr2[2]);/*вывели елемент c индексом 2*/
echo '</br>';
echo '</br>';
print_r($arr2);/* вывели полностю масив 2*/
echo '</br>';
echo '</br>';
echo count($arr2); /*количество элементов в массиве*/
echo '</br>';
echo '</br>';
unset($arr2[0]);/*удалили елемент c индексом 0 */
print_r($arr2);



?>