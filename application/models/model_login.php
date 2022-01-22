<?php

include __DIR__ . '/../config/db_connection.php';

class Model_Login extends Model {

    private $db;

    public function __construct() {

        $this->db = new Database;
    }

    public function login($data) {

        $name = $_POST['name'];
        $password = $_POST['password'];

        $sql =  "SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'";

        $pars = array('name' => $data['name'], 'password' => $data['password']);
        $result = $this->db->query($sql, $pars);
        //var_dump($result);
        /*foreach ($result as $row) {
            echo "<p>" .$row['id'] ." | " .$row['email'] ." | " .$row['name'] ." | " .$row['password'];
        }*/

       /* if ( !empty($_REQUEST['password']) and !empty($_REQUEST['name']) ) {
            //Пишем логин и пароль из формы в переменные (для удобства работы):
            $name = $_REQUEST['name'];
            $password = $_REQUEST['password'];

            
			/* Формируем и отсылаем SQL запрос:
			   ВЫБРАТЬ ИЗ таблицы_users ГДЕ поле_логин = $login И поле_пароль = $password.*/
		
		    /*$query = 'SELECT*FROM users WHERE name="'.$name.'" AND password="'.$password.'"';
		      $result = mysqli_query($link, $query); //ответ базы запишем в переменную $result
		      $user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP

		//Если база данных вернула не пустой ответ - значит пара логин-пароль правильная
		if (!empty($user)) {
			//Пользователь прошел авторизацию, выполним какой-то код.
		} else {
			//Пользователь неверно ввел логин или пароль, выполним какой-то код.
		}
	}*/
 }
}
