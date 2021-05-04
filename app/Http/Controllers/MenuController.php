<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Advertisement;

class MenuController extends Controller
{
    public function menu() {
        //$menus = Category::with('subcategories')->get();    //Đã khai báo View::composer trong file AppServiceProvider.php   
        //return view('index', compact('menus'));
        
        $category = Category::where('slug','nha-dat-ban')->first();
        $firstAds = Advertisement::where('category_id',$category->id)
            ->orderByDesc('id')->take(4)->get();
        
        $secondAds = Advertisement::where('category_id',$category->id)
            ->whereNotIn('id',$firstAds->pluck('id')->toArray())->orderByDesc('id')->take(4)->get();

        return view('index', compact('firstAds','secondAds'));
    }
}
