<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subcategory;
use App\Models\Advertisement;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'slug'];

    public function subcategories() {
        return $this->hasMany(Subcategory::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function ads() {
        return $this->hasMany(Advertisement::class);
    }

    //scope - Lesson 148(new)
    public function scopeCategorySale($query) {
        return $query->where('slug','nha-dat-ban')->first();
    }
}
