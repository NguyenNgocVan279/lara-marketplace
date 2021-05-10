<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;

class FrontAdsController extends Controller
{
    public function index() {
        $category = Category::CategorySale();        
        $firstAds = Advertisement::firstFourAdsInCarosel($category->id);
        $secondAds = Advertisement::secondFourAdsInCarosel($category->id);
        return view('index', compact('firstAds','secondAds','category'));
    }
}
