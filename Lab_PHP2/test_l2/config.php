<?php

    namespace Core;

    use mysqli;

    class Database{
        public function __construct(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "new_db";

            $conn = new mysqli($servername, $username,  $password, $database);

            if(!$conn){
                die("Connection failed: " . mysqli_connect_error());
            }else{
                echo "Connection successful"; 
            }
        }
        function hellWorld(){
            echo "Hello World";
        }
        // public function getConnect(){
        //     return mysqli_connect();
        // }
    }
    // $conn = new Database();
    // $mysqli = $conn->getConnect();
    
?>