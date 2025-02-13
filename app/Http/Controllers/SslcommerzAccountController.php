<?php

namespace App\Http\Controllers;

use App\Models\SslcommerzAccount;
use Illuminate\Http\Request;

class SslcommerzAccountController extends Controller
{
    function insertSSLCommerzAccount(Request $request)
    {
       return SslcommerzAccount::create([
            'store_id' => $request->input('store_id'),
            'store_password' => $request->input('store_password'),
            'currency' => $request->input('currency'),
            'success_url' => $request->input('success_url'),
            'fail_url' => $request->input('fail_url'),
            'cancel_url' => $request->input('cancel_url'),
            'ipn_url' => $request->input('ipn_url'),
            'init_url' => $request->input('init_url')
        ]);
    }
}
