<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_name',
        'user_id',
        'father_phone',
        'mother_phone',
        'parent_id',
        'image',
    ];


}
