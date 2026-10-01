<?php
$numbers = [1, 2, 3, 4];
$squares = array_map(fn($number) => $number ** 2, $numbers);
print_r($squares);
