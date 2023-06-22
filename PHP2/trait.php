<!-- <?php 

    trait abc{
        public function sayHi(){
            echo "Hi, EveryBody<br>";
        }
    }

    trait xyz{
        public function sayHello(){
            echo "Hi, EveryOne ";
        }
    }

    class con{
        use abc, xyz;
        
        public function __construct(){
            $this->sayHi();
            $this->sayHello();
        }
    }
    new con;
?> -->


<?php 

    trait ab1{
        public function sayA(){
            echo "Tấn Duy";
        }
    }
    trait ab2{
        public function sayB(){
            echo " Nguyễn";
        }
    }

    class ab3{
        use ab1, ab2;
        public function __construct(){
            $this->sayA();
            $this->sayB();
        }
    }
    new ab3;

?>