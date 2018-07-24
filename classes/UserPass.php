<?php

/**
 * Класс UserPass. Метод getPassword() возвращает значение звойства usrPass, имеющий тип UserPass
 */
class UserPass
{
    protected $usrPass;

    public function __construct(string $password)
    {
        $this->usrPass = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getPassword()
    {
        return $this->usrPass;
    }

}

