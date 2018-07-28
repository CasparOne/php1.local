<?php

class User
{
    /**
     * @var string $login
     * @var string $password
     */
    protected $login;
    protected $password;

    /**
     * User constructor.
     * @param $userData
     */
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