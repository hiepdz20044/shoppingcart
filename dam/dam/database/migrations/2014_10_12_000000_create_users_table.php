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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->string('dia_chi');
            $table->string('password');
            $table->date('ngay_sinh')->nullable();
            $table->string('so_dien_thoai')->nullable();
            $table->enum('gioi_tinh', ['Nam', 'Nữ'])->default('Nam');
            $table->enum('role', ['Admin', 'User'])->default('User');
            $table->boolean('trang_thai')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
