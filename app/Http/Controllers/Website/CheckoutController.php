<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function showPricing()
    {
        return view('website.checkout.pricing');
    }
}
