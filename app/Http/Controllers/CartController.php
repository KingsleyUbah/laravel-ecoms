<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Stripe;

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

    public function getCartItemsForCheckout()
    {
        
        $cartItems = Cart::with('products')->where('user_id', auth()->user()->id)->get(); 

        $finalItems = [];
        $finalAmount = 0;

        if(isset($cartItems)) 
        { 
            foreach($cartItems as $cartItem)
            {
                if($cartItem->products)
                {
                    foreach($cartItem->products as $product)
                    {
                        if($product->id === $cartItem->product_id)
                        {
                            $finalItems[$cartItem->product_id]['id'] = $product->id;
                            $finalItems[$cartItem->product_id]['name'] = $product->name;
                            $finalItems[$cartItem->product_id]['image'] = $product->image_name;
                            $finalItems[$cartItem->product_id]['quantity'] = $cartItem->quantity;
                            $finalItems[$cartItem->product_id]['sale_price'] = $cartItem->price;
                            $finalItems[$cartItem->product_id]['total'] = $cartItem->price*$cartItem->quantity;

                            $finalAmount += $cartItem->price*$cartItem->quantity;
                            $finalItems['totalAmount'] = $finalAmount;
                        }
                    }
        
                } 
            }
            
        }

        return response()->json($finalItems);
    }

    public function processPayment(Request $request) 
    {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $address = $request->get('address');
        $city = $request->get('city');
        $state = $request->get('state');
        $zipCode = $request->get('zipCode');
        $country = $request->get('country');
        $phoneNo = $request->get('phoneNo');
        $cardType = $request->get('cardType');
        $cardCode = $request->get('cardCode');
        $expirationMonth = $request->get('expirationMonth');
        $expirationYear = $request->get('expirationYear');
        $cardNumber = $request->get('cardNumber');

        // Process Payment

        $stripe = Stripe::make(env('STRIPE_KEY'));

        $token = $stripe->tokens()->create([
            'card' => [
                'number' => $cardNumber,
                'exp_month' => $expirationMonth,
                'exp_year' => $expirationYear,
                'cvc' => $cardCode,
            ]]
        );

        dd($token);
    }
}
