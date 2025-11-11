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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            // Liên kết với bảng 'users'
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // Tên gói (ví dụ: "Gói Thuê 30 Ngày")
            $table->string('packageName');
            
            // Giá (lưu là string như trong Controller)
            $table->string('price');
            
            // Mã thanh toán (bắt buộc phải là duy nhất)
            $table->string('paymentCode')->unique();
            
            // Trạng thái (ví dụ: 'pending', 'completed', 'cancelled')
            $table->string('status')->default('pending');

            $table->timestamps(); // Tự động tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};