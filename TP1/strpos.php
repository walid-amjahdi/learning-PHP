<?php
$text = 'Bonjour le monde';
$position = strpos($text, 'monde');
echo $position === false ? 'Texte introuvable' : "Trouve a la position $position";
