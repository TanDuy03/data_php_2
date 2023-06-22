<?php
namespace Core;

use mysqli;
Class Database{
    private $severname='localhost'; 
	private $username='root';
	private $password='';
	private $database='new_db';
	private $conn=null;
	private $result=null;
    public function __construct(){
        // Thực thi câu lệnh kết nối CSDL ở đây
        $this->conn = new mysqli($this->severname, $this->username, $this->password, $this->database);
        // if (!$this->conn) {
        //     die("Kết nối thất bại: " . mysqli_connect_error());
        // }else{
        //     echo "Connected successfully";
        // }
    }
    // Hàm thực thi câu lênh SQL
    public function query($query){
        // Code 
    }
    // thực hiện câu lệnh select return data
    public function fetch($sql){
        // Return data
        $this->result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($this->result) > 0) {
            return mysqli_fetch_all($this->result, MYSQLI_ASSOC);
        } else {
            return false;
        }
    }   
    // Thực hiện lệnh insert và trả về giá trị ID mới nhất
    public function insertGetNewID($name, $email, $address){
        $conn = $this->getConnection();
        mysqli_query($conn, "INSERT INTO tbl_user(name, email, address) VALUES ('$name', '$email', '$address')");
    }
    // Số lượng các record
    public function num_rows(){
        // Return Number
    }
    public function getConnection(){
        return $this->conn;
    }
    public function __destruct(){
        // Đóng kết nối
        mysqli_close($this->conn);
    }  
    function hellWorld(){
        echo "Hello World";
    } 
}
    $conn = new Database();
    $mysqli = $conn->getConnection();
    $sql = "SELECT id, name, email, address  FROM tbl_user";
    $data = $conn->fetch($sql);
    if ($data) {
        // print_r($data);
        // echo "<pre>";
        // echo "<br>".$data[0]['id'];
        // echo "<br>".$data[0]['name'];
        // echo "<br>".$data[0]['email'];
        // echo "<br>".$data[0]['address'];
        // foreach ($data as $key){
        //     echo "<br>".$key['name'];
        // }
    } else {
        echo "Không có dữ liệu";
    }
?>