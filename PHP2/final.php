<?php 
    //tạo class không cho ghi đè
    final class Person{
        final public function sayHi(){
            echo "Hi, EveryBody <br>";
        }
    }

    //class nhân viên
    class Employee extends Person{
        //báo lỗi ghi đè (không cho ghi đè class final)
        public function sayHello(){
            echo "Hi, EveryBody employee <br>";

        }
    }
    $employee = new Employee;
?>