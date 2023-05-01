<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public $timestamps = false;
    public function student(){
        return $this->hasMany(Student::class);
    }
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
