<?php

include __DIR__ . '/../config/db_connection.php';

class Model_Register extends Model {

    private $db;

    public function __construct() {

        $this->db = new Database;
    }
    
    public function register($data)
    {
        $sql = 'INSERT INTO users (email, name, password) VALUES (:email, :name, :password)';
        // var_dump($sql);
        $params = array('email' => $data['email'], 'name' => $data['name'], 'password' => $data['password']);
        $this->db->execute($sql, $params);
    
    }

}