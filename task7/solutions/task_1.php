<?php

function start(){
    $products = array(
        array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
        array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
        array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
    );

    $price=$products[0]['price']+$products[1]['price']+$products[2]['price'];
    $quantity=$products[0]['quantity']+$products[1]['quantity']+$products[2]['quantity'];
    echo $price." -общая цена";
    echo '<br/>';
    echo '<br/>';
    echo $quantity." -общее количество";
}




echo start();

?>