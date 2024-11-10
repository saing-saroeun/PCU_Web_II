<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'address',
        'tel_phone',
        'email',
        'password',
        'image',
        'status',
    ];
}
