<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Đây là tệp Seeder "chủ".
 * Nó nằm tại: database/seeders/DatabaseSeeder.php
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Chạy các seeder của ứng dụng.
     */
    public function run(): void
    {
        // Thêm dòng này để gọi ProductSeeder
        $this->call([
            ProductSeeder::class,
        ]);

        // Bạn cũng có thể thêm các seeder khác ở đây
        // \App\Models\User::factory(10)->create();
    }
}