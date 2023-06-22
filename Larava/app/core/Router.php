<?php

    namespace larava\core;
    class Router{
        public $routes = [];
        public function get($path, $callback){
            $this->routes['get'][$path] = $callback;
        }
        public function post($path, $callback){
            $this->routes['post'][$path] = $callback;
        }
        public function run(){
            // echo "<pre>";
            // print_r($_SERVER);
            // echo "</pre>";
            $method = strtolower($_SERVER['REQUEST_METHOD']);
            $path = isset($_GET['url'])?"/".$_GET['url']:"/";
            // echo $path;
            // echo "<br>".$method;
            // echo "<br>Router is running";
            $callback = $this->routes[$method][$path] ?? false;
            // var_dump($callback);
            if($callback===false){
                // echo "<h2 style='text-align:center;'>Not Found</h2>";
                header("Location: ./error.php");
                exit;
            }

            if(is_object($callback)) call_user_func($callback);
            if(is_array($callback)) {
                $controller = new $callback[0];
                $action = $callback[1];
                call_user_func([$controller, $action]);
            }

        }
    }

?>