<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['image'] = upload($data['image']);
        Product::create($data);
        return back()->withMessage('Created');
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        unset($data['_token'], $data['_method']);
        if (isset($data['image']) && $data['image']) {
            $data['image'] = upload($data['image'], $product->image);
        }
        $product->update($data);
        return back()->withMessage('Updated');
    }


    public function destroy(Product $product)
    {
        deleteFile($product->image);
        $product->delete();
        return back()->withMessage('Deleted');
    }
}
