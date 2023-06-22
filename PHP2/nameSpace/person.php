<?php
    namespace app;
    class Person{
        public $name = "Duy";
        public $age = "19";
        public function sayHi(){
            echo "Hi, Tấn e <br>";
        }
        //trường hợp methd không có public thì tự động hiểu public
        function hello(){
            //gọi thuộc tính trong class thì sử dụng $this->
            echo "Xin chào, " . $this->name;
        }
    }

?>