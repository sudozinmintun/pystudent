<?php

// When form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Get path from user input
    $inputPath = trim($_POST['path']);

    // 2. Remove trailing slash
    $inputPath = rtrim($inputPath, '/');

    // 3. Convert to absolute real path (security)
    $cleanPath = realpath($inputPath);

    if ($cleanPath === false) {
        die("<b>Error:</b> Invalid path!");
    }

    // 4. Check if directory is writable
    if (!is_writable($cleanPath)) {
        die("<b>Error:</b> Directory is not writable!");
    }

    // 5. Prepare target file path
    $targetFile = $cleanPath . '/' . basename($_FILES['file']['name']);

    // 6. Upload
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
        echo "<p><b>Uploaded successfully!</b></p>";
        echo "<p>Saved to: $targetFile</p>";
    } else {
        echo "<p><b>Error:</b> Upload failed!</p>";
    }

    echo "<p><a href='upload.php'>Upload another file</a></p>";
    exit;
}
?>

<!-- Upload Form -->
<form method="post" enctype="multipart/form-data">
    <h3>Dynamic File Upload</h3>

    <p>
        <label>Select File:</label><br>
        <input type="file" name="file" required>
    </p>

    <p>
        <label>Upload Path:</label><br>
        <input type="text" name="path" placeholder="../../../application/views/partials/" style="width:400px" required>
    </p>

    <button type="submit">Upload</button>
</form>
