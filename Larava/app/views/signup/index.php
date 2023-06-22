<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 10px;
            background-color: #fff;
            width: 400px;
            height: 400px;
            margin: 0 auto;
        }
        form input {
            padding: 10px;
            width: 250px;
            outline: none;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin: 5px 0;
        }
        form button {
            padding: 8px 10px;
            width: 100px;
            background-color: #1877f2;
            border: none;
            color: #fff;
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        form a{
            margin: 15px 0 15px 0;
            text-decoration: none;
            color: #ff0000;
            font-size: 16px;
            font-weight: 500;
        }
        h2{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>SIGN UP</h2>
        <input type="email" placeholder="Email" name="email"><br>
        <input type="text" placeholder="Username" name="uname"><br>
        <input type="password" placeholder="Password" name="pword"><br>
        <button class="btn">Sign Up</button>
        <a href="<?php echo base_url?>/login">Log in?</a>
        <?php if(isset($_SESSION['msg'])) echo $_SESSION['msg'];unset($_SESSION);?>
    </form>

</body>
</html>