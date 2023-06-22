<?php 

    class ProductController extends Controller{
        public $productModel;
        public function __construct(){
            $this->productModel = $this->Model('ProductModel');
        }
        public function index(){
            $product = $this->productModel->getProduct();
            $this->View('index', [
                'product' => $product
            ]);
        }
        public function create(){

            $errors = array();
            if (isset($_POST['submit'])) {
                $price = $_POST['price'];
                if($price < 0 ){
                    $errors['price'] = 'Nhập số lớn hơn 0';
                }
                if(empty($price)){
                    $errors['price'] = 'Không được để trống';
                }
                if(empty($_POST['name'])){
                    $errors['name'] = 'Không được để trống';
                }
                if(empty($_POST['des'])){
                    $errors['des'] = 'Không được để trống';
                }
                if(empty($errors)){
                    $result = $this->productModel->addProduct($_POST['name'], $_POST['price'], $_POST['des']);
                    if ($result) {
                        header('location:' . base_url . '/views/index');
                    }
                }
            }
            $this->View('create', $errors);
        }
        public function delete($id){

            $delete = $this->productModel->delProduct($id);
            if($delete){
                header('location:' . base_url . '/views/index');
            }
            $this->View('index');

        }
        public function edit($id){
    
            $findUser = $this->productModel->editById($id);
    
            if (isset($_POST['submit'])) {

                $update = $this->productModel->editProduct($id, $_POST['name'], $_POST['price'], $_POST['des']);
                if ($update) {
                    header('location:' . base_url . '/views/index');
                }
            }
    
            $this->View('edit', [
                'findUser' => $findUser
            ]);
        }
    }

?>