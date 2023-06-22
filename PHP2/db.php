<?php 

interface DB{
    //hàm thực thi câu lệnh SQL
    public function query();
    //thực hiện câu lệnh select return data
    public function fetch();
    //thực hiện lệnh insert và trả giá trị ID mới nhất
    public function insertGetNewID();
    //số lượng các record
    public function num_rows();
}

?>