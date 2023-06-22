<?php  

    class Person{
        public static $name = "Tấn Duy";
        public $age = "19";
        public static function sayHi(){
            echo "Hi, Tấn Duy <br>";
        }
        //trường hợp methd không có public thì tự động hiểu public
        // public function hello(){
        //     //gọi thuộc tính trong class thì sử dụng $this->
        //     echo "Xin chào, " . $this->name;
        // }
        static function hello(){
            echo "<br>Chào bé," . self::$name;
        }
    }
    Person::sayHi();
    echo Person::$name;
    Person::hello();

?>