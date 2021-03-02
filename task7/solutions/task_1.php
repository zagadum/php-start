<?php
function sum($products){
    $price=0;
    $quantity=0;
	foreach ($products as$product){
		$price+=$product['price']*$product['quantity'];
		$quantity+=$product['quantity'];
	}
    return array('quantity'=>$quantity, 'price'=>$price);
}

  $products = array(
        array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
        array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
        array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
    );

 
$vivod=sum($products);

var_dump($vivod);



?>