<?php
/** проверяем был ли передан файл отпользователя */
if (isset($_FILES['myimage'])){
    $myimg = $_FILES['myimage'];
    $name = $myimg['name'];
    $size = $myimg['size'];
    $type = $myimg['type'];
    $err = $myimg['error'];
    /** Проверяем наличие ошибок, соответствие размеру файла. типу файла.
     * Переносим загруженный файл в нужное нам место*/
    if (0 == $err &&
        1048576 >= $size &&
        ('image/jpeg' == $type ||
            'image/png' == $type)) {
        $res = move_uploaded_file($myimg['tmp_name'], __DIR__ . '/images/' . $name);
        }
}