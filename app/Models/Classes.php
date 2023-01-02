<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'class_category',
        'class_total',
        'class_teacher',
    ];



    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
}
