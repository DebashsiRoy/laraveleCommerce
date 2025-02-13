<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homePage()
    {
        return view('frontend.pages.index');
    }
    function paymentSuccess()
    {
        return ('Payment Success');
    }
    function paymentFail()
    {
        return ('Payment Failed');
    }
    function paymentCancel()
    {
        return ('Payment Cancel');
    }
}
