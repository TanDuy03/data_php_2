<?php 

    namespace larava\controllers;
    use larava\core\Controller;

    class SignUpController extends Controller{
        public $signup;
        public function __construct(){
            $this->signup = $this->Model("SignUpModel");
        }
        public function index(){
            $list = $this->signup::all();
            $this->View("signup/index", $list);
        }
        public function addUser() {
            $email = isset($_POST['email']) ? $_POST['email'] :"";
            $uname = isset($_POST['uname']) ? $_POST['uname'] :"";
            $pword = isset($_POST['pword']) ? md5($_POST['pword']) :"";

            $checkUser = $this->signup::where('user_name', $uname)->orWhere('email', $email)->first();
            if($checkUser){
                $_SESSION['msg'] = "Email or Username already exists!";
                $this->View("signup/index");
            }else{
                if($email!="" && $uname!="") $this->signup::create([
                    'email' => $email,
                    'user_name' => $uname,
                    'password' => $pword, 
                ]);
                header("location: /larava/signup");
            }
        }
    }
?>