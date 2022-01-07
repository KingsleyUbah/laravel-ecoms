<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        return view('products.all');
    }


    public function getProducts(Request $request) 
    {
        if($request->has('category')) 
        {
            $products = Product::where('category', $request->category)->orderBy('id', 'desc')->paginate($request->total);
        }
        else 
        {
            $products = Product::orderBy('id', 'desc')->paginate($request->total);
        }
        

        return [
            'products' => $products,
            'userId' => auth()->user()->id ?? 0
        ];
    }

    public function getProductPage(Request $request) 
    {
        if($request->has('id')) 
        {
            $product = Product::find($request->id);
        }
        
        return redirect()->route('product.single', $product);
    }

    public function showProductPage(Product $product) 
    {
        return view('product.show', compact($product));
    }

    public function getDiscountPage(Product $product) 
    {        
        return view('special.index');
    }
}
