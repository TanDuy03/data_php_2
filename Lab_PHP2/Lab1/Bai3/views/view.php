
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form method="post">
        <input type="text" name="name" id="input-field" placeholder="Tên của bạn"> <br>
        <input type="email" name="email" id="input-field" placeholder="Email"> <br>
        <input type="text" name="address" id="input-field" placeholder="Địa chỉ"> <br>
        <input type="submit" name="submit" id="btn_sm" value="Thêm">
    </form>
    <?php 
        // $conn = new Database();
        include_once "./Core/config.php";

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $conn = new Database();
            $conn->insertGetNewID($name, $email, $address);
        }

    ?>
</body>
</html>