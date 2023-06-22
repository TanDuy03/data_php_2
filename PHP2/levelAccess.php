<?php 

    class Person{
        public $name = "Tấn Duy"; //public có thể truy xuất trong class, ngoài class, class con được kế thừa
        protected $age = 19; //protected có thể truy xuất trong class, class con được kế thừa, không truy xuất được ngoài class
        private $money = "1 triệu đô"; //private chỉ có thể truy xuất phía trong class

        public function sayHi(){
            echo "Hi, EveryBody <br>";
        }
        public function getInfo(){
            echo $this->name . "" . $this->age . "" . $this->money;
        }
    }
    //public thì có thể truy xuất từ phía ngoài
    //protected, private thì không thể truy xuất từ phía ngoài
    $person = new Person;
    $person->sayHi();
    echo $person->name;
    $person->getInfo();
    // echo Person::PI;

    // //class nhân viên
    class Employee extends Person{
        // public $name;
        // public $age;
        public $job = "Kế toán";
        public function sayHi(){
            echo "Hi, EveryBody employee <br>";
        }
        public function getJob(){
            echo "Tôi là nhân viên ".$this->job."<br>";
        }
    }

    $employee = new Employee;
    echo $employee->name . "<br>";
    $employee->sayHi();
    $employee->getJob();


    // class Student extends Person{
    //     // public $name;
    //     // public $age;
    //     // public function sayHi(){
    //     //     echo "Hi, EveryBody";
    //     // }
    // }
    // // $person = new Person;
    // // $person->sayHi();
    // $student = new Student;
    // $student->sayHi();

?>