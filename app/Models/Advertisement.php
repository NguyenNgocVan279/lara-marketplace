<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Childcategory;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Models\User;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Support\Facades\DB;

class Advertisement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function displayVideoFromLink() {
        $embed = Embed::make($this->link)->parseUrl();
        if(!$embed){
            return;
        }
        $embed->setAttribute(['width' => 500]);
        return $embed->getHtml();
    }

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

    //Save ads relations
    public function userads() {
        return $this->belongsToMany(User::class);
    }

    //Check if user already saved the ad
    public function didUserSavedAd() {
        return DB::table('advertisement_user')
        ->where('user_id',auth()->user()->id)
        ->where('advertisement_id',$this->id)
        ->first();
    }

    //scope method for nha dat ban
    public function scopeFirstFourAdsInCarosel($query,$categoryId){
        return $query->where('category_id', $categoryId)
        ->orderByDesc('id')->take(4)->get();
    }
    public function scopeSecondFourAdsInCarosel($query,$categoryId){
        $firstAds = $this->scopeFirstFourAdsInCarosel($query,$categoryId);
        return $query->where('category_id',$categoryId)
        ->whereNotIn('id',$firstAds->pluck('id')->toArray())->orderByDesc('id')->take(4)->get();
    }

    //scope method for nha dat cho thue
    public function scopeFirstFourAdsInCaroselForRent($query,$categoryId){
        return $query->where('category_id', $categoryId)
        ->orderByDesc('id')->take(4)->get();
    }
    public function scopeSecondFourAdsInCaroselForRent($query,$categoryId){
        $firstAds = $this->scopeFirstFourAdsInCaroselForRent($query,$categoryId);
        return $query->where('category_id',$categoryId)
        ->whereNotIn('id',$firstAds->pluck('id')->toArray())->orderByDesc('id')->take(4)->get();
    }
}