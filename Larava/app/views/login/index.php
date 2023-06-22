<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            background-color: #fff;
            width: 400px;
            height: 400px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 10px;
        }
        #inputForm{
            border: 1px solid #ccc;
            outline: none;
            width: 250px;
            border-radius: 10px;
            padding: 10px 10px;
            margin: 5px 0;
        }
        h2 {
            margin-bottom: 50px;
        }
        button{
            padding: 8px 10px;
            width: 100px;
            background-color: #1877f2;
            border: none;
            color: #fff;
            border-radius: 10px;
        }
        form a{
            margin: 15px 0 15px 0;
            text-decoration: none;
            color: #ff0000;
            font-size: 16px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>LOGIN</h2>
        <input type="text" id="inputForm" placeholder="Username" name="username"><br>
        <input type="password" id="inputForm" placeholder="Password" name="password"><br>
        <button type="submit" name="submit" class="btn">Submit</button>
        <a href="<?php echo base_url?>/signup">Sign up?</a>
        <?php 
            if(isset($_SESSION['msg'])&&($_SESSION['msg'])!=""){
                echo $_SESSION['msg'];
                sleep(3);
                unset($_SESSION['msg']);
            }
        ?>
    </form>
</body>
</html>