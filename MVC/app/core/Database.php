<?php 
    class Database {
        public $host = 'localhost';
        public $username = 'root';
        public $password = '';
        public $database = 'thi_php2';
        public $conn;
        public function __construct(){
            $this->connect();
        }
        public function connect(){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            // echo "Duy";
            if(!$this->conn){
                // echo "Failed to connect";
            }else{
                // echo "Connect successfully";
            }
        }
            //lấy dữ liệu
        public function select($sql)
        {
            $data = null;
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
                return $data;
            }
        }

        // thêm sửa xóa
        public function execute($sql)
        {
            $result = $this->conn->query($sql);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        
    }
    // new Database;
?>