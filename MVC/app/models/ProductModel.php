<?php 

    class ProductModel{
        public $db;
        public function __construct(){
            $this->db = new Database;
        }
        public function getProduct()
        {
            $sql = "SELECT * FROM product";
            $result = $this->db->select($sql);
            return $result;
        }
        public function addProduct($name, $price, $des){
            $sql = "INSERT INTO product (name,price, des)
                    VALUES ('$name','$price','$des')";
            $result = $this->db->execute($sql);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        public function delProduct($id){
            $sql = "DELETE FROM product WHERE id = '$id'";
            $result = $this->db->execute($sql);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        public function editById($id)
        {
            $sql = "SELECT * FROM product WHERE id = '$id'";
            $result = $this->db->select($sql);
            return $result;
        }
    
        public function editProduct($id, $name, $price, $des)
        {
            $sql = "UPDATE product SET name = '$name',
                                        price = '$price',
                                        des = '$des'
                                    WHERE id = '$id'";
            $result = $this->db->execute($sql);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
    }

?>