<?php 

    use larava\core\Router;
    use larava\controllers\HomeController;
    use larava\controllers\AboutController;
    use larava\controllers\AdminController;
    use larava\controllers\LoginController;
    use larava\controllers\SignUpController;
    use larava\controllers\ContactController;
    use larava\controllers\ProductController;
    use larava\controllers\CategoryController;

    $router = new Router;

    // $router->get("/", function () {
    //     echo "Trang chủ";
    // });
    $router->get("/", [HomeController::class,"index"]);
    $router->get("/about", [AboutController::class,"index"]);
    $router->get("/contact", [ContactController::class,"form"]);
    
    $router->get("/admin", [AdminController::class,"index"]);

    $router->get("/category", [CategoryController::class,"index"]);
    $router->get("/delcate", [CategoryController::class,"delCate"]);
    $router->get("/editcate", [CategoryController::class,"editCate"]);
    $router->post("/category", [CategoryController::class,"addCate"]);
    $router->post("/editcate", [CategoryController::class,"updateCate"]);

    $router->get("/login", [LoginController::class,"index"]);
    $router->get("/logout", [LoginController::class,"logout"]);
    $router->post("/login", [LoginController::class, "loginUser"]);

    $router->get("/signup", [SignUpController::class,"index"]);
    $router->post("/signup", [SignUpController::class,"addUser"]);
    
    $router->get("/product", [ProductController::class,"index"]);
    $router->get("/delpro", [ProductController::class,"delPro"]);
    $router->get("/editpro", [ProductController::class,"editPro"]);
    $router->post("/product", [ProductController::class,"addPro"]);
    $router->post("/editpro", [ProductController::class,"updatePro"]);
    
    $router->post("/contact", function () {
        echo "Trang liên hệ POST";
    });

    $router->run(); 
    
?>