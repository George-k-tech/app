<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $table = 'products';
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'slug',
        'image',
    ];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
