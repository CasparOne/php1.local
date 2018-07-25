<?php

/**
 * Класс UserLogin. Метод getLogin() возвращает значение звойства usrPass, имеющий тип UserPass
 */
class UserPass
{
    protected $usrPass;

    public function __construct(string $login)
    {
        $this->usrPass = $login;
    }

    public function getPassword()
    {
        return $this->usrPass;
    }

}

