<?php
require __DIR__ . '/CurrUser.php';

/**
 * Класс описывает обьект Users. свойство $credentials содержит массив, где каждый элемент является строкой
 * вида логин;пароль
 */
class Users
{
    protected $credentials;

    public function __construct()
    {
        $lines = file(__DIR__ . '/../data/users.txt', FILE_IGNORE_NEW_LINES);
        $this->credentials = [];
        foreach ($lines as $val) {
            $login = new UserLogin(explode(':', trim($val))[0]);
            $password = new UserPass(explode(':', trim($val))[1]);
            $this->credentials[$login->getLogin()] = $password->getPassword();
        }
    }

    public function checkPass(string $login, string $password)
    {
        if (!$this->isUserExists($login)) {
            return false;
        }
        return password_verify($password, $this->credentials[$login]);
    }

    public function isUserExists($login)
    {
        return key_exists($login, $this->credentials);
    }

    public function getCurrUser()
    {
        if (!isset($_SESSION['usr']) || $_SESSION['usr'] == '') {
            return null;
        } else {
            return $_SESSION['usr'];
        }
    }
}