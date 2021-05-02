<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Childcategory;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Advertisement;

class FrontendController extends Controller
{
    public function findBasedOnSubcategory($categorySlug, Subcategory $subcategorySlug){
        //dd($subcategorySlug);
        $advertisements = $subcategorySlug->ads;
        //return $advertisements;
        return view('product.subcategory',compact('advertisements'));
    }
}
