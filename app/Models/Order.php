<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const STATUS_CREATED = 0;
    const STATUS_CONFIRMED = 1;
    const STATUS_SHIPPING = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_DELIVERY_PROBLEM = 4;
    const STATUS_CANCELLED = 5;
    protected $fillable = [
        'total',
        'status',
        'paid',
        'new_address',
        'note',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User :: class);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    
    public function getStatusText()
    {
        $statuses = [
            self::STATUS_CREATED => 'Created',
            self::STATUS_CONFIRMED => 'Confirmed',
            self::STATUS_SHIPPING => 'Shipping',
            self::STATUS_DELIVERED => 'Delivered',
            self::STATUS_DELIVERY_PROBLEM => 'Delivery Problem',
            self::STATUS_CANCELLED => 'Cancelled',
        ];

        return $statuses[$this->status] ?? 'Unknown';
    }
}
