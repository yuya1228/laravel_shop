<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'store_overview',
        'image',
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function users()
    {
        return $this -> hasMany(User::class);
    }

    public function Shop_users()
    {
        return $this->belongsToMany(Shop_user::class)->withTimestamps();
    }

    public function Likes()
    {
        return $this->belongsToMany(Like::class,'shop_id')->withTimestamps();
    }
}
