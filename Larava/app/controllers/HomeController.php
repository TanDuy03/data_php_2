<?php 

    namespace larava\controllers;
    use larava\core\Controller;
    class HomeController extends Controller{
        //Action
        public $sanpham;
        public function __construct(){
            $this->sanpham=$this->Model('ProductModel');
        }
        public function index(){        
            // $list=$this->sanpham::all();      //lấy tất cả sản phẩm 
            $list=$this->sanpham::limit(2)->get();       // lấy 2 sản phẩm
            // $list=$this->sanpham::orderBy('updated_at', 'desc')->take(5)->get();      
            $this->View("home/index",$list);     
        }
    }
    
?>