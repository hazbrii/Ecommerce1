<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'image',
        'stock',
        'price',
        'categorie_id'
    ];
    public function categorie(){
        return $this->belongsTo(Categorie :: class);
    }
    public function stocks()
    {
        return $this->hasMany(Stock::class, 'product_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id');
    }
}
