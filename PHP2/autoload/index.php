<?php
    // spl_autoload_register(function ($class) {
    //     $arr = explode("\\", $class);
    //     print_r($arr);
    //     include_once($arr[1]. ".php");
    // });

    include_once "autoload.php";

    use app\Person;
    use app\Animal;
    use app\core\Car;

    $person = new Person;
    $person->sayHi();

    $Animal = new Animal;
    $Animal->sayMyName(); 

    $Car = new Car;
    $Car->sayMyCar(); 
?>