<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class WebsiteController extends Controller
{
    public function Update(Request $request)
    {
        $website = Website::first();
        $data = $request->all();
        unset($data['_token'], $data['_method']);
        $data['phones'] = newLineToCommo($data['phones']);
        $website->update($data);
        return back()->withMessage('Success');
    }
}
