<?php
/** Функция получения списка пользователей из источника данных - файла */
function getUsersList()
{
    $dataSource = __DIR__ . '/data.txt';
    $authData = [];
    $arr = file($dataSource, FILE_IGNORE_NEW_LINES);
    foreach ($arr as $logPass) {
        $data = explode(':', $logPass);
        $authData[$data[0]] = password_hash($data[1], PASSWORD_DEFAULT);

    }
    return $authData;
}
/** Функция принимает имя пользователя и проверяет на существование этого пользователя */
function existsUser($login) {
    if (isset(getUsersList()[$login])) {
        return true;
    } else {
        return false;
    }
}

function checkPassword($login, $password){
    if (password_verify($password, getUsersList()[$login])){
        return true;
    } else {
        return false;
    }
}

function getCurrentUser() {
    if (!empty($_SESSION)){
        return $_SESSION['usrLogin'];
    }
}
