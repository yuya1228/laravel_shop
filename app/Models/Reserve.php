<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_id',
        'date_start',
        'time_start',
        'sum_people'
    ];

    public function shop()
    {
        return $this->belongsToMany(Shop::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
