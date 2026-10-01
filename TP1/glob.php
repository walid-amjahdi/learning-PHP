<?php
$files = glob(__DIR__ . '/*.php');
echo '<pre>' . htmlspecialchars(implode("\n", $files)) . '</pre>';
