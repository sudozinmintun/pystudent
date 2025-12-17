<?php
$old = 'all.min.test.css';
$new = 'all.min.css';

if (file_exists($old)) {
    if (rename($old, $new)) {
        echo "File renamed successfully!";
    } else {
        echo "Rename failed!";
    }
} else {
    echo "Old file does not exist!";
}
?>
