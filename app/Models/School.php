<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public $timestamps = false;

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function staff(){
        return $this->hasMany(Staff::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function user(){
        return $this->hasMany(Student::class);
    }
}
