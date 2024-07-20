<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Khởi tạo Faker
        $faker = Faker::create();

        // Số lượng bản ghi muốn tạo
        $numberOfRecords = 3;

        // Tạo dữ liệu giả cho bảng danh mục
        foreach (range(1, $numberOfRecords) as $index) {
            DB::table('danh_mucs')->insert([
                'ten_danh_muc' => $faker->word,
                'hinh_anh' => $faker->imageUrl($width = 640, $height = 480, 'categories', true, 'Faker', true), // Sinh ra URL của ảnh ngẫu nhiên
                'trang_thai' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
