<?php

function deleteNegtives($array){
    foreach ($array as $key=>$value){
        if ($value <0){
            unset($array[$key]);
        }
    }
    return $array;
}
$arr=array(1,76,23,86,-1,5,-12,34,-17);

$showArray=deleteNegtives($arr);
var_dump($showArray);

?>
























































