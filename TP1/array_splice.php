<?php
$letters = ['a', 'b', 'c', 'd'];
$removed = array_splice($letters, 1, 2, ['x', 'y']);
echo 'Tableau modifie : ';
print_r($letters);
echo 'Elements retires : ';
print_r($removed);
