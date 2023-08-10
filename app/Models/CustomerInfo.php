<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;

    public $table = 'customer_infos';

    protected $fillable = [
        'phone',
        'region',
        'area',
        'additionalInfo',
    ];
}
