<?php

    // require "./config.php";
    include "./config.php";

    // spl_autoload_register(function ($class) {
    //     $arr = explode("\\", $class);
    //     print_r($arr);
    // });
    include_once "vendor/autoload.php";
    use Core\Database as DB;
    $db = new DB();
    $db->hellWorld();

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