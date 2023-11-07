<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $fillable = [
        'number_identification',
        'first_name',
        'second_name',
        'last_name',
        'address',
        'phone',
        'city'
    ];
}
