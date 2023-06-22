<?php
    include_once "vendor/autoload.php";
    include_once "core/Form.php";
    include_once "core/Field.php";
    // spl_autoload_register(function($class){
    //     $arr=explode("\\",$class);
    //     $path="";
    //     include_once($arr[1].".php");
    //     for($i=1;$i<count($arr);$i++){
            
    //     }
    // });
    use app\core\Field;
    use app\core\Form;


    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create an account</h1>
        <?php $form = Form::begin('','post'); ?>
        <div class="row">
            <div class="col-sm">
                <?php echo $form->field('Firstname'); ?>
            </div>
            <div class="col-sm">
                <?php echo $form->field('Lastname'); ?>
            </div>
        </div>
        <?php echo $form->field('Email'); ?>
        <?php echo $form->field('Password')-> passWordField(); ?>
        <?php echo $form->field('ConfirmPassword')-> passWordField(); ?>
        <?php echo $form->field('SDT')-> sdtField(); ?>
        <?php echo $form->field('address')-> arrayName(); ?>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo Form::end(); ?>
    </div>
</body>
</html>