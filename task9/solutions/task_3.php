<?php

if (!isset($_COOKIE['visits'])) {
    $visited = 0;
} else {
    $visited = $_COOKIE['visits'] + 1;
} setcookie('visits', $visited, time()+1, '/' );




echo $visited;
?>