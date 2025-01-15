<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
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
}
