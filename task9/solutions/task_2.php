<?php
$counter = $_COOKIE["counter"];
if (!isset($counter)){
$counter = date('Y-m-d H:i:s');
}
else{
    $counter = $counter;
}
echo $counter;
?>