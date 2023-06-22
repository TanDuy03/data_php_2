<?php 

    class Person{
        public $name = "Tấn Duy";
        public $age;
        public function sayHi(){
            echo "Hi, EveryBody <br>";
        }
    }
    $person = new Person;
    $person->sayHi();

    //class nhân viên
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
    $employee->sayHi();
    echo $employee->name . "<br>";
    $employee->getJob();


    class Student extends Person{
        // public $name;
        // public $age;
        // public function sayHi(){
        //     echo "Hi, EveryBody";
        // }
    }
    // $person = new Person;
    // $person->sayHi();
    $student = new Student;
    $student->sayHi();

?>