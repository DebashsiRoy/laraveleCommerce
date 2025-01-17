<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\CustomerProfile;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\ProductReview;
use App\Models\ProductSlider;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ListProductByCategory(Request $request):JsonResponse
    {
        $data = Product::where('category_id', $request->id)->with('brand','category')->get();
        return ResponseHelper::Out('success',$data,200);
    }
    public function ListProductByRemark(Request $request):JsonResponse
    {
        $data = Product::where('remark', $request->remark)->with('brand','category')->get();
        return ResponseHelper::Out('success',$data,200);
    }

    public function ListProductByBrand(Request $request):JsonResponse
    {
        $data = Product::where('brand_id', $request->id)->with('brand','category')->get();
        return ResponseHelper::Out('success',$data,200);
    }
    public function ListProductBySlider():JsonResponse
    {
        $data =ProductSlider::all();
        return ResponseHelper::Out('success',$data,200);
    }
    public function ProductDetailsById(Request $request):JsonResponse
    {
        $data=ProductDetails::where('product_id', $request->id)->with('product','product.brand','product.category')->get();
        return ResponseHelper::Out('success',$data,200);
    }
    public function ListReviewByProduct(Request $request):JsonResponse
    {
        $data =ProductReview::where('product_id', $request->product_id)
            ->with(['profile'=>function ($query) {                              // Advance join use, "profile" function is called into user Model
                $query->select('id','cus_name');
        }])->get();
        return ResponseHelper::Out('success',$data,200);
    }

    public function CreateProductReview(Request $request):JsonResponse
    {
        $user_id=$request->header('id');
        $profile=CustomerProfile::where('user_id',$user_id)->first();
        if ($profile){
            $request->merge(['customer_id'=>$profile->id]);             // IF any customer id fund. merge request body it with customer id
            $data =ProductReview::updateOrCreate(                       // updateOrCreate use for the one customer can only one review
                ['customer_id'=>$profile->id, 'product_id'=>$request->input('product_id')],
                $request->input()                                       // $request->input all data push
            );
            return ResponseHelper::Out('success',$data,200);
        }
        else{
            return ResponseHelper::Out('fail','customer profile not exists',200);
        }
    }

    public function CreateProduct(Request $request)
    {
        try {
            Product::create([
                'title'=>$request->input('title'),
                'short_des'=>$request->input('short_des'),
                'price'=>$request->input('price'),
                'discount'=>$request->input('discount'),
                'discount_price'=>$request->input('discount_price'),
                'image'=>$request->input('image'),
                'stock'=>$request->input('stock'),
                'star'=>$request->input('star'),
                'remark'=>$request->input('remark'),
                'category_id'=>$request->input('category_id'),
                'brand_id'=>$request->input('brand_id')
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Product added successfully!'
            ],200);
        }
        catch (Exception $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Product not added!'
            ],200);
        }
    }

}
























