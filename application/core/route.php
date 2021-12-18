<?php 


class Route {

    public static function start() {

        $controller_name = 'Main';
        $action_name = 'index';

        $routes = $_GET['url'];

        if ( !empty($routes) ){
            $controller_name = $routes;
        }

        $model_name = 'model_' .$controller_name;
        $controller_name = 'controller_' .$controller_name;
        $action_name = 'action_' .$action_name;

        $model_file = strtolower($model_name) . '.php';
        $model_path = 'application/models/' .$model_file;
        
        if (file_exists($model_path)) {
             include 'application/models/' .$model_file;
         }

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = 'application/controllers/' .$controller_file;
        
        if (file_exists($controller_path)) {
             include 'application/controllers/' .$controller_file;
         }

         else {
             Route::ErrorPage404();
         }

         $controller = new $controller_name;
         $action = $action_name;

         if (method_exists($controller, $action)) {
            $controller->$action();
         }

         else {
            Route::ErrorPage404();
        }
    }


    /*function ErrorPage404() {
        $host = 'http://' . $_SERVER['HTTP_HOST'];
        header('HTTP/1.1 404 NOT FOUND');
        header('Status: 404 Not Found');
        header('location:'. $host .'404');
        }*/

        public static function ErrorPage404() {
            $host = 'http://' . $_SERVER['HTTP_HOST'];
            // echo $host . '?error=404';
            // header('HTTP/1.1 404 NOT FOUND');
            // header('Status: 404 Not Found');
            // header('location:' . $host . '/404');
            //header('location:' . $host . '?error=404');
            http_response_code(404);
            include __DIR__ . '/../views/404_view.php'; // provide your own HTML for the error page
            die();
         }

}

