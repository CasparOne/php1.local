<?php


class Db
{
    protected $dbh;

    /**
     * Db constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db'];
        $this->dbh = new PDO($dsn, $config['user'], $config['pass']);
    }

    /**
     * @param string $sql
     * @return bool
     */
    public function execute(string $sql)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $sql
     * @param array|null $data
     * @return array|bool
     */
    public function query(string $sql, array $data = null)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)) {
            return$sth->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

}