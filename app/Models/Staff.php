<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $guarded = ['id',];
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function teacher(){
        return $this->hasOne(Teacher::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }
}
