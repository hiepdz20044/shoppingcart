<?php

use App\Models\DanhMuc;
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
        //
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ma_san_pham')->unique();
            $table->string('ten_san_pham');
            $table->string('hinh_anh')->nullable();
            $table->double('gia');   
            $table->double('gia_khuyen_mai')->nullable();
            $table->string('mo_ta_ngan')->nullable();
            $table->text('noi_dung')->nullable();
            $table->unsignedInteger('so_luong');
            $table->unsignedBigInteger('luot_xem');
            $table->date('ngay_nhap');
            $table->foreignIdFor(DanhMuc::class)->constrained(); // Khóa phụ
            $table->softDeletes();// them 1 truong de xoa mem
            $table->boolean('moi')->default(true);
            $table->boolean('trang_thai')->default(true);
            $table->boolean('hot')->default(true);
            $table->boolean('hot_deal')->default(true);
            $table->boolean('show_home')->default(true);
            $table->timestamps(); //create_at, update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('san_phams');
    }
};
