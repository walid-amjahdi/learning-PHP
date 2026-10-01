<?php
$numbers = [3, 8, 12, 5, 20];
$even = array_filter($numbers, fn($number) => $number % 2 === 0);
print_r($even);
