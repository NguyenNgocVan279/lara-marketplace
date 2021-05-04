<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Childcategory;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Models\User;

class Advertisement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function childcategory() {
        return $this->hasOne(Childcategory::class,'id','childcategory_id');
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function ward(){
        return $this->belongsTo(Ward::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
