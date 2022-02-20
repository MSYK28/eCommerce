<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'price',
    ];


    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
