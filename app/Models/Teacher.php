<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded=['id',];

    public function staff(){
        return $this->belongsTo(Staff::class);
    }
}
