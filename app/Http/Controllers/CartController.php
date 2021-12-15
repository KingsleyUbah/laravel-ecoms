<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->get('product_id')) {
            return [
                'message' => 'Product Count',
                'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }

        $product = Product::find($request->get('product_id'));

        $productInCart = Cart::where('product_id', $request->get('product_id'))->pluck('id');

        if($productInCart->isEmpty()) {
            
            // Create New Product on Cart
            $cart = Cart::create([
                'product_id' => $product->id,
                'user_id' => auth()->user()->id,
                'quantity' => 1,
                'price' => $product->sale_price, 
            ]);
        } else {

            // Increment Item Quantity on Cart
            $cart = Cart::where('product_id', $request->get('product_id'))->increment('quantity');
        }

        if($cart) {
            return [
                'message' => 'Cart Updated',
                'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
