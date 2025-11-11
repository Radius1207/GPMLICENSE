<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    /**
     * Các thuộc tính có thể được gán hàng loạt.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'packageName',
        'keyString',
        'status',
        'purchaseDate', // Ngày mua (có thể null nếu là key được gán)
    ];

    /**
     * Lấy thông tin user sở hữu license này.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}