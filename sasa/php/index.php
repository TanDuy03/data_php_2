<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/styles.css">
    <link rel="stylesheet" href="./Bootstrap/bootstrap.min.css">
    <script src="Js/angular.min.js" defer></script>
</head>
<body>

    <div class="container w-25 mt-5">
        <form action="" method="get">
            <input type="text" class="form-control" name="domain" placeholder="Nhập tên miền example.com..." value="">
            <button type="submit" class="form-control w-50 mx-auto mt-2 bg-primary text-white">Kiểm tra</button>
        </form>
    </div>


    <?php 
        error_reporting(0);
        if(isset($_GET['domain'])){
            $domain = $_GET['domain'];
            //kiểm tra
            if(gethostbyname($domain) != $domain){
                echo "Tên miền đã tồn tại";
                echo file_get_contents("http://www.whois.net.vn/whois.php?domain=$domain&act=getwhois");
            }else{
                echo "Đăng ký ngay";
            }
        }
    
    ?>

    <!--  -->
    <script src="./Js/bootstrap.bundle.min.js"></script>
</body>
</html>