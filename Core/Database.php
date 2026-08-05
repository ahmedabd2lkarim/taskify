<?php
class Database
{
    public $connection;
    public $statment;
    public $result;

    public function __construct($config, $username = 'root', $password = '')
    {
        $username = $config['username'];
        $password = $config['password'];

        $db = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($db, $username, $password);
        $this->statment = $this->connection->prepare('SELECT body FROM tasks WHERE user_id = :user');
        $this->statment->execute(['user'=>1]);
        $this->result=$this->statment->fetch();
    }
}
