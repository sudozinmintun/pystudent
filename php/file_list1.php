<?php
$dir = __DIR__ . '/css';  // adjust to correct folder relative to script
echo "Scanning directory: $dir\n";
$files = scandir($dir);

if ($files === false) {
    echo "scandir failed\n";
} else {
    echo "<pre>";
    print_r($files);
    echo "</pre>";
}

$test = $dir . '/all.min.css';
echo "file_exists('all.min.css'): " . (file_exists($test) ? 'yes' : 'no') . "\n";
?>
