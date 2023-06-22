<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra domain</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>
<body>
    <div class="card mt-3 mx-3 bg-primary">
        <div class="card-body">
            <h2 class="text-center text-white text-animate">Test chức năng domain - WHOIS</h2>
        </div>
    </div>

    <!-- Form -->
    <div class="container mt-3">
        <div class="row w-75 mx-auto bg-success-subtle p-4 rounded-1">
            <form action="" method="get" class="mx-auto">
                <input type="text" class="form-control" name="domain" placeholder="Nhập tên miền cần kiểm tra">
                <button class="btn btn-primary w-50 mt-3 d-block mx-auto">Kiểm tra</button>
            </form>
        </div>
    </div>

    <?php 
        $key = "aa2095d37dda44ee8c0ebd035118ec15";
        error_reporting(0);
        if(isset($_GET['domain'])){
            $domain = $_GET['domain'];
            // if(file_exists($domain)) {
            //     $api = $domain;
            //     $response  = file_get_contents($api);
            // }else{
            //     $api = "https://api.whoisfreaks.com/v1.0/whois?apiKey=".$key."&whois=live&domainName=".$domain;
            //     $response  = file_get_contents($api);
            //     file_put_contents($domain, $response );
            // }
            // $response  = json_decode($response);
            // if(isset($response->status) && $response->status){
            //     echo $response->domain_registrar->registrar_name;
            // }else{
            //     echo $domain . " chưa được đăng ký";
            // }
            
            if(gethostbyname($domain) != $domain){
                $api = "http://www.whois.net.vn/whois.php?domain=".$domain."&act=getwhois";
                $response  = file_get_contents($api);
                $file = "./domain/list.txt";
                file_put_contents($file, $response, FILE_APPEND);
                echo "
                    <div class='container mt-3 mb-3'>
                        <div class='row bg-primary w-75 mx-auto rounded-1 p-4'>
                            <span class='text-white'>$response</span>
                        </div>
                    </div>
                
                ";
            }else{
                echo " chưa đăng kí ";
            }
            // 
        }
    ?>
    <!--  -->
    <div class="card mb-3 mx-3 border-0">
        <span class="text-center fst-italic">Designed by Nguyen Tan Duy - FPT</span>
    </div>
    <!-- javascript -->
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>