<?php 

    namespace larava\controllers;
    use larava\core\Controller;
    session_start();
    class LoginController extends Controller{
        public $user;
        public function __construct(){
            $this->user = $this->Model('SignUpModel');
        }
        public function index(){
            $this->View("login/index");
        }
        public function loginUser(){
            if(isset($_POST['submit'])){
                $uname = $_POST['username'];
                $password = ($_POST['password']);
                
                if(empty($uname) || empty($password)){
                    $_SESSION['msg'] = "Nhập username và password";
                    $this->View("login/index");
                }else{
                    $check = $this->user::where([['user_name', $uname], ['password', md5($password)]])->get();
                    if($check->isEmpty()){
                        $_SESSION['msg'] = "Sai thông tin đăng nhập!";
                        $this->View("login/index");
                    }else{
                        $id_user = $check[0]['id'];
                        $role = $check[0]['role'];
                        $user_name = $check[0]['user_name'];
                        // $this->View("login/index");
                        if($role === 1){
                            $_SESSION['role'] = $role;
                            $_SESSION['user'] = $user_name;
                            // $_SESSION['msg'] = "đây là admin page " . $role;
                            // echo "<script> alert(".$_SESSION['user_name'].") </script>";
                            header("Location: /larava/admin");
                        }elseif($role === 0){
                            $_SESSION['role'] = $role;
                            // $_SESSION['user'] = $user_name;
                            // $_SESSION['msg'] = "đây là user page " . $role;
                            // $_SESSION['msg'] = "<script> alert('đăng nhập thành công') </script>";
                            header("Location: /larava");
                        }else{
                            $this->View("login/index");
                        }
                    }
                }

            }
        }
        public function logout(){
            session_destroy();
            header("Location: /larava");
        }
    }

?>