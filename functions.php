<?php
/**
 * @return mixed
 */
function getUsersList()
{
    $conf = include __DIR__ . '/data.php';
    return $conf['credentials'];
}

/**
 * @param $login
 * @return bool
 */
function existsUser($login) :bool
{
    if (false === getUsersList()) {
        return false;
    }
    return key_exists($login, getUsersList());
}

/**
 * @param $login
 * @param $password
 * @return bool
 */
function checkPassword($login, $password) :bool
{
    if (!existsUser($login)) {
        return false;
    }
    return password_verify($password, getUsersList()[$login]);
}

/**
 * @return mixed
 */
function getCurrentUser()
{
    if (!empty($_SESSION) && existsUser($_SESSION['usr'])) {
        return $_SESSION['usr'];
    }
    return false;
}
