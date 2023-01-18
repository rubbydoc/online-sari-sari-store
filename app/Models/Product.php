<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'stocks'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //$category=Category::find(1)->product
//fetch category with id 1 from database and fetch all the products that have that category
//$category=Category::find(1)->product->where('stocks','=','0')->all()

//one to many relationship (Category and Product)

public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
