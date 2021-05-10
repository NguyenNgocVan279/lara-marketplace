<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Category;

class FrontAdsController extends Controller
{
    public function index() {
        //for catagory nha dat ban
        $category = Category::CategorySale();        
        $firstAds = Advertisement::firstFourAdsInCarosel($category->id);
        $secondAds = Advertisement::secondFourAdsInCarosel($category->id);

        //for category nha dat cho thue
        $categoryRent = Category::CategoryRent();
        $firstAdsForRent = Advertisement::firstFourAdsInCaroselForRent($categoryRent->id);
        $secondAdsForRent = Advertisement::secondFourAdsInCaroselForRent($categoryRent->id);

        return view('index', compact(
            'firstAds',
            'secondAds',
            'category',
            'categoryRent',
            'firstAdsForRent',
            'secondAdsForRent'
        ));
    }

    
}
