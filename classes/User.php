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
        $this->password = $userData[1];
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return bool|string
     */
    public function  getPassword()
    {
        return $this->password;
    }

}