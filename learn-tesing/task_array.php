<?php

//$array=[
//    [0,0,0,0,0],
//    [0,0,0,0,0],
//    [0,0,0,0,0],
//    [0,0,0,0,0],
//    [0,0,0,0,0]
//];


$n=10;
$arrayEmpty=[];

for($i=0; $i<$n; $i++){
    $arrayEmpty[]=[];
    for ($j=0; $j<$n;$j++){

        if ($i==$j){
            $arrayEmpty[$i][]=1;

        } else{
            $arrayEmpty[$i][]=0;

        }

    }

}
for($i=0; $i<count($arrayEmpty); $i++){

    for ($j=0; $j<count($arrayEmpty[$i]);$j++){
        echo $arrayEmpty[$i][$j].' ';
    }
    echo "<br/>";
}


//echo "<br/>";
//echo "<br/>";
//echo "<br/>";
//echo "<br/>";
//
//
//$m=5;
//$arrayReverse=[];
//
//for($x=0; $x<$m; $x++){
//    $arrayReverse[]=[];
//    for ($y=0; $y<$m;$y++){
//
//        if ($x==$y){
//            $arrayReverse[$x][]=1;
//
//        } else{
//            $arrayReverse[$x][]=0;
//
//        }
//
//    }
//
//}
//for($x=0; $x<count($arrayReverse); $x++){
//
//    for ($y=0; $y<count($arrayReverse[$x]);$y++){
//        echo $arrayReverse[$x][$y].' ';
//    }
//    echo "<br/>";
//}





?>