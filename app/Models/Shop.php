<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        return $this -> belongsToMany(User::class);
    }
}
