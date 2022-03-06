<?php

include __DIR__ . '/../config/db_connection.php';

class Model_Register extends Model {

    private $db;

    public function __construct() {

        $this->db = new Database;
    }

    /*function generateHash($password) {
        if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
            $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
            return crypt($password, $salt);
        }
    }*/
    
    public function register($data)
    {
        $sql = 'INSERT INTO users (email, name, password) VALUES (:email, :name, :password)';
        // var_dump($sql);
        $params = array('email' => $data['email'], 'name' => $data['name'], 'password' => $data['password']);
        $this->db->execute($sql, $params);
    
    }

    public function validate(array $request) 
    {
        $errors = [];
        if (!isset($request['email']) || strlen($request['email']) == 0) {
            $errors[]['email'] = 'Email не указан';
        } elseif (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[]['email'] = 'Неправильный формат email';
        } elseif (strlen($request['email']) < 4) {
            $errors[]['email'] = 'Email должен быть больше 4х символов';
        } elseif (isEmailAlreadyExists($request['email'])) {
            $errors[]['email'] = 'Email уже используется';
        }
        if (!isset($request['name']) || empty($request['name'])) {
            $errors[]['name'] = 'Имя не указано';
        }
        if (!isset($request['password']) || empty($request['password'])) {
            $errors[]['password'] = 'Пароль не указан';
        }
        if (!isset($request['repeat-password']) || empty($request['repeat-password'])) {
    
            $errors[]['repeat-password'] = 'Нужно повторить пароль';
        } elseif ((isset($request['password']) && isset($request['repeat-password'])) && ($request['password'] != $request['repeat-password'])) {
    
            $errors[]['repeat-password'] = 'Пароли не совпадают';
        }
        return $errors;
    }

    public function isEmailAlreadyExists(string $email)
    {
        if (getUserByEmail($email)) {
            return true;
        }
        return false;
    }

 
}