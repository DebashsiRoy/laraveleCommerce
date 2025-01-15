<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Mockery\Exception;

class BrandController extends Controller
{
    public function BrandList():JsonResponse
    {
        $data = Brand::all();
        return ResponseHelper::Out('success', $data,200);
    }
    function addBrand(Request $request)
    {
        try {
            Brand::create([
                'name' => $request->name,
                'brandImg' => $request->brandImg,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Brand added successfully!'
            ]);
        }
        catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Brand not added!'
            ]);
        }
    }
}
