<?php
$file = __DIR__ . '/sample.txt';
file_put_contents($file, "Bonjour depuis sample.txt\n");
echo nl2br(htmlspecialchars(file_get_contents($file)));
