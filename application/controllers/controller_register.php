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

    function action_register() {
        $this->model->register($_POST);
        $this->action_success();
    }

    function action_success() {
        $this->view->generate('register_success_view.php', 'template_view.php');
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
  
}
