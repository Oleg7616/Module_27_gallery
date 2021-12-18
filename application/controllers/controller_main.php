<?php require_once 'application\config\config.php'; ?>

<?php

class Controller_Main extends Controller { 

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index() { 
       $this->view->generate('main_view.php', 'template_view.php'); 
    }

    function action_loadFile()
    {
        $errors = [];

        if (!empty($_FILES)) {

            for ($i = 0; $i < count($_FILES['files']['name']); $i++) {

                $fileName = $_FILES['files']['name'][$i];

                if ($_FILES['files']['size'][$i] > UPLOAD_MAX_SIZE) {
                    $errors[] = 'Недопустимый размер файла ' . $fileName;
                    continue;
                }

                if (!in_array($_FILES['files']['type'][$i], ALLOWED_TYPES)) {
                    $errors[] = 'Недопустимый формат файла ' . $fileName;
                    continue;
                }

                $filePath = UPLOAD_DIR . '/' . basename($fileName);

                if (!move_uploaded_file($_FILES['files']['tmp_name'][$i], $filePath)) {
                    $errors[] = 'Ошибка загрузки файла ' . $fileName;
                    continue;
                }
            }
        }

        $data=$this->model->get_data();
        $this->view->generate('main_view.php',$data, $_POST['name']);
    }
}