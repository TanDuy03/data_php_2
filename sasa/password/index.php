<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <h3>Password</h3>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style="margin-bottom: 30px;">
        <input type="text" placeholder="Password" name="pass" required value="">
        <button type="submit" name="btn" id="btn">Đi</button>
    </form>
    <!-- <script>
        $(document).ready(function(){
            $('#btn').click(function(e){
                e.preventDefault();
                console.log("ok");
            })
        })
    </script> -->
    <?php 
    
        // $pass = "Tanduy26@";
        // $encode = password_hash($pass, PASSWORD_DEFAULT);
        // echo $encode;
        // // 
        // if(password_verify($pass, $encode)){
        //     echo "<br>password valid";
        // }else{
        //     echo "<br>password not valid";
        // }
        if(isset($_POST['btn'])){
            // $pass = $_POST['pass'];
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            // $encode = password_hash($pass, PASSWORD_DEFAULT);
            echo " chuỗi mã hóa ".$pass;

            //kiểm tra
            // if(password_verify($pass, $encode)){
            //     echo "<br>đúng mật khẩu";
            // }else{
            //     echo "<br>sai";
            // }
            setcookie('Password', $pass);
            echo "<br>Đã set cookie";
        }
        if(isset($_COOKIE['Password'])){
            echo "<br>Cookie: ".$_COOKIE['Password'];
        }
    ?>


</body>
</html>