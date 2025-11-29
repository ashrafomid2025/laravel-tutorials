<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    //
    use HasFactory;
    use SoftDeletes;

    public function scopeMale($query){
        $query->where("age",">", 50)->where("gender","m");
    }
    public function scopeFemale($query){
        $query->where("gender","f");
    }
}
