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
        // Chỉnh sửa bảng 'users' đã có
        Schema::table('users', function (Blueprint $table) {
            // Thêm cột 'is_admin', mặc định là false (0)
            // Đặt sau cột 'password' cho gọn gàng
            $table->boolean('is_admin')->default(false)->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Xóa cột nếu rollback
            $table->dropColumn('is_admin');
        });
    }
};