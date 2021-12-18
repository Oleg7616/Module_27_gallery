<?php

class Controller_Register extends Controller {

    function __construct()
    {
       $this->model = new Model_Register();
       $this->view = new View();
    }

    function action_index() {
        //$data = $this->model->get_data();
        $this->view->generate('register_view.php', 'template_view.php');
    }

/*public function register() {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    // echo ('Connected');
    mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES (NULL, '$email', '$name', '$password')");
    header('Location: ../views/login_view.php');
} else {
    die ('Пароли не совпадают');
}*/


    /*public function action_register() {
    $index['title'] = 'Регистрация';
    // Объявим переменые, что не возникало ошибок
    $email = false;
    $name = false;
    $password = false;
    // Обработка формы
    if (isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        if (!User::checkPassword($password)) $errors[] = 'Вы не ввели пароль, пароль меньше 6-х символов';
        if (!User::checkEmail($email)) $errors[] = 'Неверно указан E-mail';
        else
        {
            // Проверяем существует ли пользователь
            $checkEmail = User::checkUserEmail($email);
            $checkName = User::checkUserName($name);
            if ($checkEmail == true) $errors[] = 'Пользователь с таким Email, уже зарегистрирован, введите другой Email';
            if ($checkName == true) $errors[] = 'Пользователь с таким именем, уже зарегистрирован, введите другое имя';
            else
            {
                $hashed_password = User::generateHash($password); // Сохраняем Хеш пароля
                if (!User::register($email, $name, $hashed_password)) $errors[] = 'Ошибка Базы Данных';
            }
        }
    }
    
 }*/
  
}
