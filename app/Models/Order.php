<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [

        'amount',
        'shipping_fee',
        'payment_method'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('date', 'quantity', 'total');
    }

}


//$order->product()->sync([1=>['date'=>'2023-01-18','quantity'=>50,'total'=>5000]]);
