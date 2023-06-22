<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->increments('id_loai');
            $table->string('ten_loai',50);
            $table->integer('thutu')->default(0);
            $table->boolean('anhien')->default(0);
            $table->timestamps();
        });
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id_sp');
            $table->integer('id_loai');
            $table->string('ten_sp',100);
            $table->integer('gia');
            $table->integer('gia_km')->nullable();
            $table->string('hinh',255)->nullable();
            $table->date('ngay');
            $table->integer('soluotxem')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('anhien')->default(0);
            $table->boolean('tinhchat'); // Giảm sốc, giá rẻ, Cao cấp, ...
            $table->text('mota')->nullable();
            $table->timestamps();
        });
        Schema::create('sanphamchitiet', function (Blueprint $table) {
            $table->increments('id_ct');
            $table->integer('id_sp');
            $table->string('RAM',20)->nullable();
            $table->string('CPU',50)->nullable();
            $table->string('Dia',20)->nullable();
            $table->string('Mausac',20)->nullable();
            $table->string('Cannang',20)->nullable();
            $table->timestamps();
        });
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id_dh');
            $table->integer('id_user');
            $table->datetime('thoidiemmua');
            $table->string('tennguoinhan',100);
            $table->string('dienthoai',100);
            $table->string('diachigiaohang',100);
            $table->boolean('trangthai')->default(0);
            $table->integer('tongtien')->default(0);            
            $table->timestamps();
        });
        Schema::create('donhangchitiet', function (Blueprint $table) {
            $table->increments('id_ct');
            $table->integer('id_dh');
            $table->integer('id_sp');
            $table->string('ten_sp',100);
            $table->integer('soluong')->default(1);   
            $table->integer('gia');                    
            $table->timestamps();
        });
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('ho',100);
            $table->string('ten',100);
            $table->string('matkhau',100);
            $table->string('email',255)->unique();
            $table->string('diachi',255);
            $table->string('dienthoai',255);
            $table->string('hinh',255)->nullable();
            $table->boolean('vaitro')->default(0);
            $table->boolean('trangthai')->default(0);   
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();              
            $table->timestamps();
        });
        Schema::create('binhluan', function (Blueprint $table) {
            $table->increments('id_bl');
            $table->integer('id_sp');
            $table->integer('id_user');
            $table->text('noidung');
            $table->datetime('thoidiem');
            $table->boolean('anhien')->default(0);             
            $table->timestamps();
        });
        Schema::create('doitac', function (Blueprint $table) {
            $table->increments('id_dt');
            $table->string('hinh')->nullable();
            $table->integer('thutu')->default(0);
            $table->boolean('anhien')->default(0);             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tech');
    }
};
