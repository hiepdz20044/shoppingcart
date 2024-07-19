<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        // Lấy tất cả các id của danh mục có sẵn
        $danhMucIds = DB::table('danh_mucs')->pluck('id');

        foreach (range(1, 10) as $index) {
            DB::table('san_phams')->insert([
                'ten_san_pham' => $faker->word,
                'hinh_anh' => $faker->imageUrl(),
                'gia' => $faker->randomFloat(2, 10, 1000),
                'so_luong' => $faker->numberBetween(1, 100),
                'id_danh_muc' => $faker->randomElement($danhMucIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
