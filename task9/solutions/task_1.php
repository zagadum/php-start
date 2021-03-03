<?php
$hello="новичек";
if (isset($_COOKIE['cookie'])) {
    $hello="не новичек";
}else{
    setcookie('cookie','1',time()+300);
}

echo $hello;
?>