<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Member;
use App\Models\Message;
use App\Models\Product;

class LandingController extends Controller
{
    public function index()
    {
        $website = Website::first();
        $products = Product::latest()->get();
        $members = Member::all();
        return view('landing.index', compact('website', 'products', 'members'));
    }
}
