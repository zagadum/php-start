<?php


function sqrFunction($a,$b,$c = 0)
{

    $d = ($b * $b) - (4 * $a * $c);

    if ($d > 0) {

        $x1 = ((-$b) - sqrt($d)) / 2 * $a;
        $x2 = ((-$b) + sqrt($d)) / 2 * $a;
        return array('x1' => $x1, 'x2' => $x2);
    } elseif ($d == 0) {
        return (-$b + sqrt($d)) / (2 * $a);
    } else {
        return false;
    }
}
print_r(sqrFunction(1, -8, 7));






?>