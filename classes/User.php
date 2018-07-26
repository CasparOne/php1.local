<?php


class User
{
    protected $login;
    protected $password;

    public function __construct($userData)
    {
        $userData = explode(':', $userData);
        $this->login = $userData[0];
        $this->password = password_hash($userData[1], PASSWORD_DEFAULT);
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function  getPassword()
    {
        return $this->password;
    }

}