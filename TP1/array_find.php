<?php
$numbers = [3, 8, 12, 5, 20];
if (function_exists('array_find')) {
    echo array_find($numbers, fn($number) => $number > 10);
} else {
    echo 'array_find() necessite PHP 8.4 ou une version plus recente.';
}
