<?php
    try{
        echo "Đây là dòng đầu tiên<br>";
        doSomething();
    }catch(error $e){
        echo $e."<br>";
        echo "lỗi " . $e->getMessage() ."<br>";
        echo "lỗi ở dòng " . $e->getLine() ."<br>";
        echo "lỗi ở file " . $e->getFile() ."<br>";

    }
    echo "Đây là dòng cuối cùng";

?>