<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'contact_number',
        'birth_date',
        'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
