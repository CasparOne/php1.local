<?php
require __DIR__ . '/CurrUser.php';

/**
 * Класс описывает обьект Users. свойство $credentials содержит массив, где каждый элемент является строкой
 * вида логин;пароль
 */
class Users
{
    protected $credentials;
/** Метод конструктор открывает, читает файл и сохраняет данные */
    public function __construct()
    {
        $lines = file(__DIR__ . '/../data.txt', FILE_IGNORE_NEW_LINES);
        $this->credentials = [];
        foreach ($lines as $val) {
            $arr = explode(';', $val);
            $login = new UserLogin($arr[0]);
            $password = new UserPass($arr[1]);
            $this->credentials[$login->getLogin()] = $password->getPassword();
        }
    }
/** Метод проверяет логин/пароль пользователя */
    public function checkPass(string $login, string $password)
    {
        if (!$this->isUserExists($login)) {
            return false;
        }
        return password_verify($password, $this->credentials[$login]);
    }

    public function isUserExists(string $login)
    {
        return isset($this->credentials[$login]);
    }

    public function getCurrUser()
    {
             return $_SESSION['usr'];
    }
}