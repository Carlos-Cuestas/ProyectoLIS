<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\School;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory,SoftDeletes;

    public $timestamps = false;
    protected $guarded=['id',];

    public function school(){
        return $this->belongsTo(School::class);
    }
    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function scores(){
        return $this->hasMany(Score::class);
    }
}
