<?php

/*$connect = mysqli_connect('localhost', 'root', '', 'gallery');

if (!$connect) {
    die ('Error connect to DataBase');
}*/

/*function get_connection()
{
    extract(include 'config.php');
    return new PDO('mysql:host=localhost;dbname=gallery', 'root', '');
}*/

require 'config.php';

class Database {

    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect() {

        $config = require_once 'db_config.php';

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    public function execute($sql) {

        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }

    public function query($sql) {

        $sth = $this->link->prepare($sql);
        $sth->execute();

        $result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false) {
            return [];
        }

        return $result;
    }

}

//$db = new Database();

/*$db->execute("INSERT INTO `users` SET `email`='oleontjev@gmail.com', `name`='Oleg', `password`='123'");

$users = $db->query("SELECT * FROM `users`");

print_r($users);*/
