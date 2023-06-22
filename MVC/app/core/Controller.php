<?php 

    class Controller{
        public function Model($model){
            require_once "./app/models/$model.php";
            return new $model;
        }
        public function View($view, $data = []){
            require_once './app/views/'.$view.'.php';
        }
    }
    const base_url = "http://localhost/thi";
    define('APPROOT',dirname(dirname(__FILE__)));
?>