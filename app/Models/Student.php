<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable =
        [
        'user_id',
        'name',
        'admission_no',
        'name',
        'gender',
        'dob',
        'class',
        'parent',
        'father_phone',
        'mother_phone',
        ];


}
