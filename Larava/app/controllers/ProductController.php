<?php 

    namespace larava\controllers;
    use larava\core\Controller;
    class ProductController extends Controller{
        public $product;
        public function __construct(){
            $this->product = $this->Model('ProductModel');
        }
        public function index(){
            $list = $this->product::all();
            $this->View("product/index",$list,"admin");
        }
        public function addPro(){
            $tensp = isset($_POST['tensp']) ? $_POST['tensp'] : "";
            $price = isset($_POST['price']) ? $_POST['price'] : "";
            $des = isset($_POST['des']) ? $_POST['des'] : "";
            //xử lý hình ảnh
            // $image = $_FILES['image']['name'];
            $target_dir = "./uploads/product/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $image = $target_file;
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            // kết thúc xử lý
            if($tensp!="" && $price!="" && $des!="" && $image!="") $this->product::create([
                'tensp' => $tensp,
                'price' => $price,
                'img' => $image,
                'des' => $des,
            ]);
            header("location: /larava/product");
        }
        public function delPro(){
            $id = isset($_GET['id'])?$_GET['id']:"";
            if($id!="") $this->product::where("id", $id)->delete();
            header("location: /larava/product");
        }
        public function editPro(){
            $id = isset($_GET['id'])?$_GET['id']:"";
            if($id!=""){
                $product = $this->product::where("id", $id)->get();
                $this->View("product/editpro", $product, "admin");
            }
        }
        public function updatePro(){
            $id = isset($_GET['id'])?$_GET['id']:"";
            $tensp = isset($_POST['tensp']) ? $_POST['tensp'] : "";
            $price = isset($_POST['price']) ? $_POST['price'] : "";
            $des = isset($_POST['des']) ? $_POST['des'] : "";
            //xử lý ảnh
            $target_dir = "./uploads/product/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $image = $target_file;
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                //upload ảnh thành công
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                //xử lý ảnh không thành công
                // echo "Sorry, there was an error uploading your file.";
            }
            //
            if($tensp!="" && $price!="" && $des!="" && $image!=""){
                //kiểm ta nếu không cập nhập ảnh thì giữ nguyên
                $this->product::where("id", $id)->update([
                    'tensp' => $tensp,
                    'price' => $price,
                    'des' => $des,
                ]);
            }else{
                $this->product::where("id", $id)->update([
                    'tensp' => $tensp,
                    'img' => $image,
                    'price' => $price,
                    'des' => $des,
                ]);
            }
            header("location:/larava/product");
        }

    }
?>