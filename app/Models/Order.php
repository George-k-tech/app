<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'price',
        'image',
        'quantity',
    ];
}
