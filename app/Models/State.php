<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function schools(){
        return $this->hasMany(School::class);
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
