<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'user_id',
      'gender',
      'email',
      'class',
      'phone',
      'staff_id',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
