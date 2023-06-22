<!-- <?php 

interface UocMoCuaMe{
    public function DauDaiHoc();
    public function layVo();
}

class NguoiCon implements UocMoCuaMe{
    public function DauDaiHoc(){
        echo "Học giỏi<br>";
        echo "Thi toán lí hóa trên 9 điểm<br>";
        echo " đậu đại học<br>";
    }
    public function layVo(){
        echo "Tết này con không có bồ <br>";
    }
}

$nguoicon = new NguoiCon;
$nguoicon->DauDaiHoc();
$nguoicon->layVo();
?> -->


<?php 

    interface uocMo{
        public function coNha();
        public function coXe();
    }

    class thucHien implements uocMo{
        public function coNha(){
            echo "Đã có Villa";
        }
        public function coXe(){
            echo "Có xe Audi";
        }
    }
    $thuchienUM = new thucHien;
    $thuchienUM->coNha();
    $thuchienUM->coXe();


?>