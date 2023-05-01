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

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
