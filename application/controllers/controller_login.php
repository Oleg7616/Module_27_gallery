<?php

class Controller_Login extends Controller {

    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    function action_index() {
        $this->view->generate('login_view.php', 'template_view.php');
    }

    function action_login() {
        $this->model->login($_POST);
        $this->action_success();
    }

    function action_success() {
        $this->view->generate('main_view.php', 'template_view.php');
    }

}