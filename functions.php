<?php
/**
 * @return array
 */
function getUsersList()
{
    $dataSource = __DIR__ . '/data.txt';
    $authData = [];
    $arr = file($dataSource, FILE_IGNORE_NEW_LINES);
    foreach ($arr as $logPass) {
        $data = explode(':', $logPass);
        $authData[$data[0]] = $data[1];
    }
    return $authData;
}

/**
 * @param $login
 * @return bool
 *
 */
function existsUser($login) {
    if (isset(getUsersList()[$login])) {
        return true;
    } else {
        return false;
    }
}

/**
 * @param $login
 * @param $password
 * @return bool
 */
function checkPassword($login, $password){
    if (password_verify($password, getUsersList()[$login])){
        return true;
    } else {
        return false;
    }
}

/**
 * @return mixed
 */
function getCurrentUser() {
    if (!empty($_SESSION)){
        return $_SESSION['usrLogin'];
    }
}