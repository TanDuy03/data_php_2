<?php

    namespace larava\controllers;
    use larava\core\Controller;
    class AdminController extends Controller{
        public function index(){
            $this->View("admin/index",[], 'admin');
        }
    }

?>