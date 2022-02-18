<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    // use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'quantity',
        'description',
        'image',
        'price',
        'category'
    ];

    public function price()
    {
    	return $this->hasOne(Price::class);
    }
    public function color()
    {
    	return $this->hasOne(Color::class);
    }
}