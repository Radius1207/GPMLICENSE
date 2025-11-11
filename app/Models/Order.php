<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
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
        'price',
        'paymentCode',
        'status', // 'pending', 'completed', 'cancelled'
    ];

    /**
     * Lấy thông tin user sở hữu đơn hàng này.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}