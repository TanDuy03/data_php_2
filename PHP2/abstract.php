<?php 

abstract class NguoiMe{
    public $money = "2 tỉ ";
    public $nha = "5 căn biệt thự";
    abstract public function layVo();
}

class NguoiCon extends NguoiMe{
    public function layVo(){
        echo "Đã lấy được vợ";
    }
}
$con = new NguoiCon;
echo $con->money."<br>";
echo $con->nha."<br>";
$con->layVo();

?>


