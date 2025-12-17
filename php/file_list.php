<?php
$files = scandir('.'); // . = current folder

foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo $file . "<br>";
    }
}
?>
