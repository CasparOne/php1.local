<?php
require __DIR__ . '/User.php';

class Users
{
    /**
     * @var string $dbUsr
     */
    protected $dbUsr = __DIR__ . '/../data/users.txt';
    protected $data = [];

    /**
     * Users constructor.
     */
    public function __construct()
    {
        $lines= file($this->dbUsr, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $rawData = new User($line);
            $this->data[$rawData->getLogin()] = $rawData->getPassword();
        }
    }

    /**
     * @return array $data
     */
    public function getUserList()
    {
        return $this->data;
    }

    /**
     * @param string $login
     * @return bool
     */
    public function isUsrExists(string $login)
    {
        if (isset($this->data[$login])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $login
     * @param string $password
     * @return bool
     */
    public function checkLogPass(string $login, string $password)
    {
        if (password_verify($password, $this->data[$login])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getCurUser()
    {
        return $_SESSION['usr'];
    }

}
