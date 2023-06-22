<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form_box">
        <form action="" method="post">
            <input type="text" name="" id="" placeholder="Username">
            <button>Gửi</button>
        </form>
    </div>
    <script>
        const form = document.querySelector(".form_box form");
        form.onsubmit = (e) => {
            e.preventDefault();
            console.log("ok");
        }
    </script>
</body>
</html>