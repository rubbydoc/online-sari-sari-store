<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }







    

    // $pro = Category::find(1)->product
    //fetch product from database that has catgory_id 1

    //$category=Product::find(9)->category
    //get category of the product from the database that has id 9
}
