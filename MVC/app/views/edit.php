<?php require_once APPROOT . '/views/header.php';?>
<div class="table-parent-create">
    <?php foreach ($data['findUser'] as $user) : extract($user); ?>
        <form action="<?php echo base_url;?>/ProductController/edit/<?= $id ?>" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" value="<?= $name ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="text" name="price" value="<?= $price ?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Describe</label>
                <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3"><?= $des ?></textarea>
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Update</button>
        </form>
    <?php endforeach; ?>
</div>