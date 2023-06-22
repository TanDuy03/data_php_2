<?php
    namespace app;
    class Student{
        static public function nhapDiem($diem){
            if ($diem < 0)
                throw new \Exception("Điểm nhập nhỏ hơn 0");
            if ($diem > 10)
                throw new \Exception("Điểm nhập không lớn hơn 10");
            echo "bạn đã nhập điểm thành công<br>";
        }
    }

?>