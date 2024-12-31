<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Category;
use Illuminate\Http\Request;
use Mockery\Exception;

class CategoryController extends Controller
{
    function categoryList()
    {
        $data = Category::all();
        return ResponseHelper::Out('success',$data,200);
    }

    function addCategory(Request $request)
    {
        try {
            Category::create([
                'name' => $request->name,
                'categoryImg'=>$request->categoryImg
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Brand added successfully!'
            ]);
        }
        catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Category Can not added!'
            ]);
        }
    }
}
