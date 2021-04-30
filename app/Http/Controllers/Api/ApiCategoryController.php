<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;

class ApiCategoryController extends Controller
{
    public function getCategory()
    {
        $category = Category::get();
        return response()->json($category);
    }

    public function getSubcategory()
    {
        $subcategory = Subcategory::where('category_id',1)->get();
        return response()->json($subcategory);
    }

    public function getChildcategory()
    {
        $childcategory = Childcategory::where('subcategory_id',1)->get();
        return response()->json($childcategory);
    }
}
