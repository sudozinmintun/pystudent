<?php
echo "all min css";
$target = 'all.min.css';

if (file_exists($target)) {
    if (unlink($target)) {
        echo "all.min.css deleted!";
    } else {
        echo "Failed to delete file!";
    }
} else {
    echo "File does not exist!";
}
