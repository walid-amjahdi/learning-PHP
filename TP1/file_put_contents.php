<?php
$file = __DIR__ . '/written.txt';
$bytes = file_put_contents($file, "Texte ecrit avec file_put_contents().\n");
echo "$bytes octets ecrits dans written.txt.";
