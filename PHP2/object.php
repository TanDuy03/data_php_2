<?php 

    //Class: khuôn mẫu properties(thuộc tính) methods(phương thức)
    //object: sản phẩm tạo ra từ khuôn là class

    class Person{
        public $name = "Duy";
        public $age = "19";
        public function sayHi(){
            echo "Hi, Tấn Duy <br>";
        }
        //trường hợp methd không có public thì tự động hiểu public
        public function hello(){
            //gọi thuộc tính trong class thì sử dụng $this->
            echo "Xin chào, " . $this->name;
        }
    }

    //Object
    $person1 = new Person("","");
    $person1->name ."<br/>";
    //gọi thuộc tính
    $person1->age . "<br/>";
    //gọi phương thức
    $person1->sayHi();
    $person1->hello();

    $person2 = new Person("","");

?>