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
        $advertisements = $subcategorySlug->ads; // lấy tất cả các ad trong bảng Advertisements 
        //return $advertisements;
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');//fix duplicate childcategory in filter
        return view('product.subcategory',compact('advertisements','filterByChildCategories'));
    }
}
