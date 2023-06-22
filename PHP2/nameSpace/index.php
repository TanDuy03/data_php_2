<?php

    include_once "person.php";
    include_once "core\person.php";
    include_once "animal.php";
    use app\core\Person;
    use app\Person as Human;
    use app\Animal;

    $person = new Person;
    $person->sayHi();

    $Human = new Human;
    $Human->sayHi();

    $Animal = new Animal;
    $Animal->sayMyName("duy");
?>