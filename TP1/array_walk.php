<?php
$prices = ['stylo' => 5, 'cahier' => 12];
array_walk($prices, function (&$price, $product) {
    $price *= 1.2;
});
print_r($prices);
