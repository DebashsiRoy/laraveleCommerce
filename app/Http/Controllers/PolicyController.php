<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Policy;

class PolicyController extends Controller
{
    public function policyList():JsonResponse
    {
        $data = Policy::all();
        return ResponseHelper::Out('success', $data, 200);
    }
    function PolicyByType(Request $request)
    {
        return Policy::where('type','=',$request->type)->first();
    }
    function addPolicy(Request $request)
    {
        try {
            Policy::create([
                'type' => $request->input('type'),
                'description' => $request->input('description')
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Policy added successfully!'
            ],200);
        }
        catch (Exception $e) {
            return response()->json([
               'status' => 'fails',
               'message' => 'Policy not added!'
            ],200);
        }
    }
}
