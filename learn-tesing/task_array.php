<?php

$array=[
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0],
    [0,0,0,0,0]
];


$n=10;
$arrayEmpty=[];
//$arrayEmpty[]=1;
//$arrayEmpty[]=[];

//1)
for($i=0; $i<$n; $i++){
    $arrayEmpty[]=[];
    for ($j=0; $j<$n;$j++){
        $arrayEmpty[$i][]=0;


    }
}
for($i=0; $i<count($arrayEmpty); $i++){

    for ($j=0; $j<count($arrayEmpty[$i]);$j++){
        echo $arrayEmpty[$i][$j].' ';
    }
    echo "<br/>";
}

?>