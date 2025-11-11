<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // Quan trọng cho API

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Các thuộc tính có thể được gán hàng loạt.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Các thuộc tính nên được ẩn khi trả về (ví dụ: trong JSON).
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Các thuộc tính nên được chuyển kiểu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Tự động hash mật khẩu
        'is_admin' => 'boolean', // Đảm bảo bạn có dòng này
    ];

    /**
     * Lấy tất cả các license của User này.
     * (Quan hệ 1-Nhiên: Một User có nhiều License)
     */
    public function licenses()
    {
        return $this->hasMany(License::class);
    }

    /**
     * Lấy tất cả các đơn hàng của User này.
     * (Quan hệ 1-Nhiên: Một User có nhiều Order)
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
// SỬA LỖI: Đã xóa dấu '}' bị thừa ở đây