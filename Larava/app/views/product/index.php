<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Product name</label>
        <input type="text" name="tensp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here...">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Enter here...">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" name="image" class="form-control" id="" placeholder="Enter here..." multiple>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Describe</label>
        <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    <div class="form-group d-flex justify-content-center">
        <button class="btn btn-primary" name="submit" id="btnSubmit">Add Product</button>
    </div>
</form>
<!--  -->
<div class="container-fluid">
    <div class="table-responsive-sm">
        <table class="table table-bordered" style="margin-top: 20px;">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Describe</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php 
                foreach ($data as $key => $value){
                    // print_r("<pre>");
                    // var_dump($value);
                    // print_r("</pre>");
            ?>
            <tbody>
                <tr>
                    <th scope='row'><?php echo $value['id']?></th>
                    <td><?php echo $value['tensp']?></td>
                    <td><?php echo $value['price']?></td>
                    <td style="text-align: center;"><img src="<?php echo $value['img'];?>" alt="" style="width: 220px; height:160px;"></td>
                    <td><?php echo $value['des']?></td>
                    <td>
                        <a href="<?php echo base_url;?>/editpro/<?php echo $value['id']?>">Edit</a>
                        |
                        <a href="<?php echo base_url?>/delpro/<?php echo $value['id']?>">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>