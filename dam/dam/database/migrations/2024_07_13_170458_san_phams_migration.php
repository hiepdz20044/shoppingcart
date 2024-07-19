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
        //
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ten_san_pham');
            $table->string('hinh_anh');
            $table->double('gia', 8, 2);   
            $table->integer('so_luong');
            $table->unsignedBigInteger('id_danh_muc'); // Khóa phụ
            $table->foreign('id_danh_muc')->references('id')->on('danh_mucs');
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
