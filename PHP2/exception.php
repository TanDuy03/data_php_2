<?php

    // class Student{
    //     static public function nhapDiem($diem){
    //         if ($diem < 0)
    //             throw new Exception("Điểm nhập nhỏ hơn 0");
    //         if ($diem > 10)
    //             throw new Exception("Điểm nhập không lớn hơn 10");
    //         echo "bạn đã nhập điểm thành công";
    //     }
    // }


    include_once "./Student.php";
    use app\Student;
    try{
        echo "Đây là dòng đầu tiên<br>";
        // doSomething();
        Student::nhapDiem(11);
    }catch(Exception $e){
        //error or exception
        echo $e."<br>";
        echo "lỗi " . $e->getMessage() ."<br>";
        echo "lỗi ở dòng " . $e->getLine() ."<br>";
        echo "lỗi ở file " . $e->getFile() ."<br>";
    }finally{
        echo "Luôn luôn chạy<br>";
    }
    echo "Đây là dòng cuối cùng";

?>