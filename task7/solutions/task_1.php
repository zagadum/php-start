<?php




//$price=0;
//$quantity=0;
function sum(){


    $products = array(
        array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
        array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
        array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
    );




    $price=0;
    $quantity=0;
foreach ( $products as $product){
    $price+=$product['price']*$product['quantity'];
    $quantity+=$product['quantity'];

}

echo 'Общая сумма покупок - '.$price;

echo '<br/>';
echo '<br/>';

echo 'Общее количество выбранных товаров - '.$quantity;
}


echo sum();

?>