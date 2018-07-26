<?php
require __DIR__ . '/User.php';

class Users
{
    protected $dbUsr = __DIR__ . '/../data/users.txt';
    protected $data = [];

    public function __construct()
    {
        $lines= file($this->dbUsr, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $rawData = new User($line);
            $this->data[$rawData->getLogin()] = $rawData->getPassword();
        }
    }

    public function getUserList()
    {
        return $this->data;
    }

    public function isUsrExists($login)
    {
        if (isset($this->data[$login])) {
            return true;
        } else {
            return false;
        }
    }

    public function checkLogPass($login, $password)
    {
        if (password_verify($password, $this->data[$login])) {
            return true;
        } else {
            return false;
        }
    }

    public function getCurUser()
    {
        return $_SESSION['usr'];
    }

}
