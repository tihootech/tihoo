<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Member;
use App\Models\Message;
use App\Models\Product;

class DashboardController extends Controller
{
    public function home()
    {
        $website = Website::first();
        $products = Product::latest()->get();
        return view('dashboard', compact('website', 'products'));
    }
}
