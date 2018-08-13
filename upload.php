<?php
session_start();
if (empty($_SESSION['usr'])) {
    header('Location:http://php1.local/login.php');
}

if (isset($_FILES['myimage'])){
    $myimg = $_FILES['myimage'];
    $name = $myimg['name'];
    $size = $myimg['size'];
    $type = $myimg['type'];
    $err = $myimg['error'];

    if (0 == $err && 1048576 >= $size && ('image/jpeg' == $type || 'image/png' == $type)) {
        move_uploaded_file($myimg['tmp_name'], __DIR__ . '/images/' . $name);
        $log = date('Y-m-d^H:i:s') . '^' . $_SESSION['usr'] . '^' . $name;
        $logFile = file(__DIR__ . '/upload.log', FILE_IGNORE_NEW_LINES);
        $logFile[] = $log;

        foreach ($logFile as $line) {
            $record = implode("\n", $logFile);
        }
        file_put_contents(__DIR__ . '/upload.log', $record);
    }
}
header('Location:http://php1.local/index.php');
