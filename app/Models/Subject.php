<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    public $timestamps = false;
    public function scores(){
        return $this->hasMany(Score::class);
    }
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
