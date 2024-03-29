<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded=['id',];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
