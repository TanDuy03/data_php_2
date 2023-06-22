<?php
    require "./Autoload/vendor/autoload.php";
    // require "./Database.php";

    // spl_autoload_register(function ($className) {
    //     // var_dump($className);
    //     $new_class = str_replace('\\', '/', $className);
    //     include  $new_class. '.php';
    // });
    use Autoload\Database;
    $db = new Database();
    $db->helloWorld(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Home Page
</body>
</html>