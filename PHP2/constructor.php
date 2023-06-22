<?php

    class Person{
        public $name = "Duy";
        public $age = "15";
        //hàm khởi tạo
        ///construct chạy đầu tiên khi khởi tạo 1 project
        //_magic method
        public function __construct($name='noOk', $age=0){
            // echo"đây là hàm construct <br>";
            $this->name = $name;
            $this->age = $age;
        }
        public function sayHi(){
            echo "Hi, Tấn Duy <br>";
        }
        //trường hợp method không có public thì tự động hiểu public
        public function hello(){
            //gọi thuộc tính trong class thì sử dụng $this->
            echo "Xin chào, " . $this->name;
        }

        //destructor: chyaj cuối cùng đã tạo object
        public function __destruct(){
            echo "Đây là hàm destruct<br>";
        }
    }
    $person1 = new Person("Xể", 19);
    echo $person1->name. "<br>Tuổi: " . $person1->age."<br>";

    $person2 = new Person("Duy", 20);
    echo $person2->name . "<br>Tuổi: " . $person2->age."<br>";
    
    $person3 = new Person;
    echo $person3->name . " Tuổi " .$person3->age . "<br>";
?>