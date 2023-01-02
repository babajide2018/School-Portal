<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;


    protected $fillable = [
        'class',
        'subject',
        'admission_no',
        'name',
        'gender',
        'assignment',
        'test',
        'exam',
        'total',
        'session',
        'term',
        'remark',
    ];
}
