<?php 

    spl_autoload_register(function ($class) {
        // $arr = explode("\\", $class);
        // print_r($arr);

        
        // $path = "";
        // for ($i=1; $i < count($arr) ; $i++) { 
        //     if ($i == count($arr )- 1) {
        //         $path = $path . $arr[$i];
        //     }else{
        //         $path = $path.$arr[$i]."/";
        //     }
        // }
        // include_once($path.".php");

        //xử lý chuỗi
        $path = substr($class, strpos($class, "\\") + 1, strlen($class));
        include_once($path.".php");
    });

?>