<?php
include __DIR__ . '/classes/Uploader.php';
if (isset($_FILES['myimage'])) {
    $uploader = new Uploader('myimage');
    $uploader->upload();
}

?>

<h1>Галерея</h1>
<form method="post" action="/upload.php" enctype="multipart/form-data">
    <input type="file" name="myimage">
    <button type="submit">Добавить</button>
</form>