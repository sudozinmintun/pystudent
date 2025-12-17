<?php
$path = __DIR__ . "/all.min.css";

if (file_exists($path)) {
    echo "File STILL exists on server.";
} else {
    echo "File is deleted on server.";
}
?>
