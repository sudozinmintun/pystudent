<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    move_uploaded_file($_FILES['file']['tmp_name'], '../../../application/views/partials/' . $_FILES['file']['name']);
    echo "Uploaded!";
    exit;
}
?>

<form method="post" enctype="multipart/form-data" action="">
    <input type="file" name="file">
    <input type="text" name="path">
    <button>Upload</button>
</form>
