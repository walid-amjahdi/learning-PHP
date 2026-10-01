<?php
$file = fopen(__DIR__ . '/students.csv', 'w');
fputcsv($file, ['Nom', 'Note']);
fputcsv($file, ['Amina', 18]);
fclose($file);
echo 'Fichier students.csv cree.';
