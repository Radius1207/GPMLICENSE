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
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            
            // Tạo cột user_id (BigInt)
            // 'constrained' sẽ tự động liên kết với 'id' trên bảng 'users'
            // 'cascadeOnDelete' nghĩa là nếu user bị xóa, license cũng bị xóa
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            
            // Tên gói (ví dụ: "Key Vĩnh Viễn")
            $table->string('packageName');
            
            // Chuỗi key (có thể bạn muốn nó là 'unique' hoặc 'text' nếu key quá dài)
            $table->string('keyString')->unique(); // Giả sử key là duy nhất

            // Trạng thái (ví dụ: 'active', 'inactive', 'pending')
            $table->string('status')->default('active');
            
            // Ngày mua (có thể để trống)
            $table->date('purchaseDate')->nullable();

            $table->timestamps(); // Tự động tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};