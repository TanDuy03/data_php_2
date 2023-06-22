<?php 

    abstract class nguoiMe{
        public $loginForm = "Login successfully <br>";
        public $signupForm = "Signup successfully <br>";
        abstract function loginNo();
    }
    class nguoiCon extends nguoiMe{
        public function loginNo(){
            echo "Connect to database and login try again <br>";
        }
    }
    $children = new nguoiCon;
    $children->loginNo();
    echo $children->loginForm;
    echo $children->signupForm;

    // 
    trait Login {
        public function loginPar(){
            echo "Login to database <br>";
        }
    }
    trait Signup {
        public function signupPar(){
            echo "Signup to database <br>";
        }
    }
    
    class toDo{
        use Login, Signup;
        public function __construct(){
            $this->signupPar();
            $this->loginPar();
        }
    }
    new toDo;

    //

    interface nguoiBo{
        public function toList();
        public function toOut();
    }
    class ngParent implements nguoiBo{
        public function toList(){
            echo "Parent list<br>";
        }
        public function toOut(){
            echo "Out list<br>";
        }
    }
    $ng = new ngParent;
    $ng->toList();
    $ng->toOut();
    

?>