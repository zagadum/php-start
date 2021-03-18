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
        if ($arrayEmpty[$i][$j]==1){
            echo "<span style='color:red;'>".$arrayEmpty[$i][$j].' '."</span>";
        }else{
            echo "<span >".$arrayEmpty[$i][$j].' '."</span>";
        }
    }
    echo "<br/>";
}


echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";









$m=10;
$mk=$m;
$arrayReverse=[];

for($x=0; $x<$m; $x++){
    $arrayReverse[]=[];
    for ($y=0; $y<$m;$y++){

        if ($mk-$x==$y+1){
            $arrayReverse[$x][]=1;

        } else{
            $arrayReverse[$x][]=0;

        }

    }

}
for($x=0; $x<count($arrayReverse); $x++){

    for ($y=0; $y<count($arrayReverse[$x]);$y++){

        if ($arrayReverse[$x][$y]==1){
            echo "<span style='color:red;'>".$arrayReverse[$x][$y].' '."</span>";
        }else{
            echo "<span >".$arrayReverse[$x][$y].' '."</span>";
        }
    }
    echo "<br/>";
}





?>