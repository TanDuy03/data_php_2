<?php 
    require_once APPROOT . '/views/header.php';?>
    <div class="table-parent-create">
        <form action="<?php echo base_url;?>/ProductController/create" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                <?php 
                    if(isset($data['name'])) {
                ?>
                    <span style="color: red; font-size: 14px;"><?php echo $data['name'];?></span>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="">
                <?php 
                    if(isset($data['price'])) {
                ?>
                    <span style="color: red; font-size: 14px;"><?php echo $data['price'];?></span>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Describe</label>
                <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3"></textarea>
                <?php 
                    if(isset($data['des'])) {
                ?>
                    <span style="color: red; font-size: 14px;"><?php echo $data['des'];?></span>
                <?php } ?>
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Create</button>
        </form>
    </div>
