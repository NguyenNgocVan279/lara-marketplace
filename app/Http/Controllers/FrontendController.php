<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Childcategory;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\User;

class FrontendController extends Controller
{
    public function findBasedOnCategory(Category $categorySlug) {
        $advertisements = $categorySlug->ads;
        $filterBySubcategory = Subcategory::where('category_id',$categorySlug->id)->get();
        return view('product.category', compact('advertisements','filterBySubcategory'));
    }

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

    public function findBasedOnChildcategory(
        $categorySlug, 
        Subcategory $subcategorySlug, 
        Childcategory $childcategorySlug,
        Request $request
        ) {

        // Sắp xếp theo giá
        $advertisementBaseOnFilter = Advertisement::where('childcategory_id',
        $childcategorySlug->id)->when($request->minPrice,function($query,$minPrice){
            return $query->where('price','>=',$minPrice);
        })->when($request->maxPrice,function($query,$maxPrice){
            return $query->where('price','<=',$maxPrice);
        })->get();
        // End sắp xếp theo giá

        //$advertisements = $childcategorySlug->ads; // lấy tất cả các ad trong bảng Advertisements 
        $advertisementWithoutFilter = $childcategorySlug->ads; // lấy tất cả các ad trong bảng Advertisements
        $filterByChildCategories = $subcategorySlug->ads->unique('childcategory_id');//fix duplicate childcategory in filter

        $advertisements = $request->minPrice||$request->maxPrice ? $advertisementBaseOnFilter : $advertisementWithoutFilter;

        return view('product.childcategory',compact('advertisements','filterByChildCategories'));
    }

    // show individual ads
    public function show($id, $slug) {
        $advertisement = Advertisement::where('id', $id)->where('slug', $slug)->first();
        return view('product.show', compact('advertisement'));
        
    }

    //show user ads
    public function viewUserAds($id) {
        $advertisements = Advertisement::where('user_id',$id)->paginate(8);
        $user = User::find($id);
        return view('seller.ads',compact('advertisements','user'));
    }
}
