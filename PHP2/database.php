<?php 

    class Database{
        private $severname = "localhost";
        private $username = "username";
        private $password = "password";
        private $conn = null;
        public function __construct(){
            //thực thi câu lệnh kết nối cơ sở dữ liệu
            $conn = new mysqli($this->severname, $this->username, $this->password);
        }
        //hàm thực thi câu lệnh SQL
        public function Query($query){
            // code
        }
        // Select
        public function SelectByID($id){
            //return
        }

        public function __destruct(){
            //đóng kết nối
        }
        public function InsertGetNewID(){
            
        }
    }

    $db = new Database;
    
    $db->Query($sql);
?>