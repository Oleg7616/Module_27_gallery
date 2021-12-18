<?php

include __DIR__ . '/../config/db_connection.php';

class Model_Register extends Model {

    private $db;

    public function __construct(){
        
        $this->db = new Database;
    }
    
public function register($data)
{

    $this->db->query('INSERT INTO users (email, name, password) VALUES (:email, :name, :password)');

        $this->db->bind(':email', $data['email']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':password', $data['password']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    
}

}