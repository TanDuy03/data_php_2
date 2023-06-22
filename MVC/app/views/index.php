<?php require_once APPROOT . '/views/header.php';?>
<div class="table-parent">
        <div class="btn_submit">
            <a href="<?php echo base_url;?>/ProductController/create">
                <button type="button" class="btn btn-primary">Add Product</button>
            </a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Describe</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <?php foreach($data['product'] as $product) : extract($product); ?>
            <tbody>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td><?= $price ?></td>
                    <td><?= $image ?></td>
                    <td><?= $des ?></td>
                    <td>
                        <a href="<?php echo base_url;?>/ProductController/edit/<?= $id?>" onclick="return confirm('Bạn muốn sửa?')">Edit</a> 
                        |
                        <a href="<?php echo base_url;?>/ProductController/delete/<?= $id?>" onclick="return confirm('Bạn muốn xóa?')">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>    
    </div>