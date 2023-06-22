<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Product name</label>
        <input type="text" name="tensp" class="form-control" 
            id="exampleInputEmail1" aria-describedby="emailHelp" 
            placeholder="Enter here..." 
            value="<?php echo $data[0]['tensp']?>"
        >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" name="price" class="form-control" 
            id="exampleInputPassword1" 
            placeholder="Enter here..."
            value="<?php echo $data[0]['price']?>"
        >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" name="image" class="form-control" 
            id="exampleInputPassword1" placeholder="Enter here..." multiple
        >
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Describe</label>
        <textarea class="form-control" name="des" 
        id="exampleFormControlTextarea1" rows="5" value=""><?php echo $data[0]['des']?></textarea>
    </div>
    <button class="btn btn-primary">Update</button>
</form>