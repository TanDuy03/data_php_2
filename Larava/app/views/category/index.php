<h3>Trang Category</h3>
<form action="" method="post">
    <input type="text" name="txtName">
    <button>Thêm</button>
</form>
<ul>
    <?php foreach ($data as $key => $value) { ?>
        <li>
            <?php echo $value['name'];?>
            <a href="<?php echo base_url;?>/editcate/<?php echo $value['id']?>">Edit</a>
            <a href="<?php echo base_url;?>delcate/<?php echo $value['id']?>">Delete</a>
        </li>
    <?php } ?>
</ul>