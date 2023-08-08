<?php
echo "mysqli: " . (extension_loaded('mysqli') ? 'installed' : 'not installed') . PHP_EOL;
echo "PDO: " . (extension_loaded('pdo') ? 'installed' : 'not installed') . PHP_EOL;
echo "PDO MySQL: " . (extension_loaded('pdo_mysql') ? 'installed' : 'not installed') . PHP_EOL;
?>
