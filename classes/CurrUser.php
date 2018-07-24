<?php
require __DIR__ . '/UserLogin.php';
require __DIR__ . '/UserPass.php';

/**
 * Класс CurrUser описывает обьект CurrUser.
 * Свойство $usrLogPass содержит массив обьектов, где индекс - обьект типа UserLogin, а
 * элемент массива - обьект типа UserPass. Метод getUsrLoginPassword() возвращает
 * значение $usrLogPass
 */
class CurrUser
{
    protected $usrLogPass;

    public function __construct($login, $password)
    {
        $login = new UserLogin($login);
        $password = new UserPass($password);
        $this->usrLogPass[$login->getLogin()] = $password->getPassword();
    }

    public function getUsrLoginPassword()
    {
        return $this->usrLogPass;
    }

}