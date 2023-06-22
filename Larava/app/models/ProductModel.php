<?php 

    use Illuminate\Database\Eloquent\Model as Model;
    class ProductModel extends Model{
        public $table = "tbl_product";
        public $timestamps = false;
        public $fillable = ['tensp','img', 'price', 'des'];
    }

?>