<?php 

    use Illuminate\Database\Eloquent\Model as Model;
    
    class SignUpModel extends Model{
        public $table = "tbl_user";
        public $timestamps = false;
        public $fillable = ['email', 'user_name', 'password'];
        public $guared = ['id'];
        public $loginAdmin = false;
        public $loginUser = false;
    }

?>