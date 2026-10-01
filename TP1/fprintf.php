<?php
$file = fopen(__DIR__ . '/report.txt', 'w');
fprintf($file, "Etudiant : %s | Note : %.1f\n", 'Youssef', 16.5);
fclose($file);
echo nl2br(file_get_contents(__DIR__ . '/report.txt'));
