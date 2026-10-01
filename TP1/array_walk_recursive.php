<?php
$student = ['name' => 'Lina', 'grades' => ['math' => 16, 'php' => 18]];
array_walk_recursive($student, function (&$value, $key) {
    if (is_numeric($value)) $value += 1;
});
print_r($student);
