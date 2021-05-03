<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Childcategory;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Advertisement;

class FrontendController extends Controller
{
    public function findBasedOnSubcategory(Request $request, $categorySlug, Subcategory $subcategorySlug){
        //dd($subcategorySlug);

        // Sắp xếp theo giá
        $advertisementBaseOnFilter = Advertisement::where('subcategory_id',
        $subcategorySlug->id)->when($request->minPrice,function($query,$minPrice){
            return $query->where('price','>=',$minPrice);
        })->when($request->maxPrice,function($query,$maxPrice){
            return $query->where('price','<=',$maxPrice);
        })->get();
        // End sắp xếp theo giá


        //$advertisements = $subcategorySlug->ads; // lấy tất cả các ad trong bảng Advertisements 
        $advertisementWithoutFilter = $subcategorySlug->ads; // lấy tất cả các ad trong bảng Advertisements 
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');//fix duplicate childcategory in filter

        $advertisements = $request->minPrice||$request->maxPrice ? $advertisementBaseOnFilter : $advertisementWithoutFilter;
        
        return view('product.subcategory',compact('advertisements','filterByChildCategories'));
    }

    public function findBasedOnChildcategory($categorySlug, Subcategory $subcategorySlug, Childcategory $childcategorySlug) {
        $advertisements = $childcategorySlug->ads; // lấy tất cả các ad trong bảng Advertisements 
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');//fix duplicate childcategory in filter
        return view('product.childcategory',compact('advertisements','filterByChildCategories'));
    }
}
