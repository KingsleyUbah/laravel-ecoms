<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    
    public function getWishlistPage()
    {
        return view('wishlist.index');
    }

    
    public function store(Request $request)
    {
        if(!$request->get('product_id')) {
            return [
                'message' => 'Product Count in Wishlist',
                'list' => Wishlist::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }

        $product = Product::find($request->get('product_id'));

        $productInWishlist = Wishlist::where('product_id', $request->get('product_id'))->pluck('id');

        if($productInWishlist->isEmpty()) {
            
            // Create New Product on Wishlist
            $wishlist = Wishlist::create([
                'product_id' => $product->id,
                'user_id' => auth()->user()->id,
                'quantity' => 1,
                'price' => $product->sale_price, 
            ]);
        } else {

            // Increment Item Quantity on Wishlist
            $wishlist = Wishlist::where('product_id', $request->get('product_id'))->increment('quantity');
        }

        if($wishlist) {
            return [
                'message' => 'Wishlist Updated',
                'list' => Wishlist::where('user_id', auth()->user()->id)->sum('quantity')
            ];
        }
    }

    public function getItemsForWishlistPage()
    {
        
        $wishlistItems = Wishlist::with('products')->where('user_id', auth()->user()->id)->get(); 

        $finalItems = [];
        $finalAmount = 0;

        if(isset($wishlistItems)) 
        { 
            foreach($wishlistItems as $wishlistItem)
            {
                if($wishlistItem->products)
                {
                    foreach($wishlistItem->products as $product)
                    {
                        if($product->id === $wishlistItem->product_id)
                        {
                            $finalItems[$wishlistItem->product_id]['id'] = $product->id;
                            $finalItems[$wishlistItem->product_id]['name'] = $product->name;
                            $finalItems[$wishlistItem->product_id]['image'] = $product->image_name;
                            $finalItems[$wishlistItem->product_id]['quantity'] = $wishlistItem->quantity;
                            $finalItems[$wishlistItem->product_id]['sale_price'] = $wishlistItem->price;
                            $finalItems[$wishlistItem->product_id]['total'] = $wishlistItem->price*$wishlistItem->quantity;

                            $finalAmount += $wishlistItem->price*$wishlistItem->quantity;
                            $finalItems['totalAmount'] = $finalAmount;
                        }
                    }
        
                } 
            }
            
        }

        return response()->json($finalItems);
    }

    public function incrementItemInWishlist(Request $request) 
    {
        
        $wishlist = Wishlist::where('product_id', $request->get('product_id'))->increment('quantity');

        if($wishlist) 
        {
            $wishlistItems = Wishlist::with('products')->where('user_id', auth()->user()->id)->get(); 

            $finalItems = [];
            $finalAmount = 0;

        if(isset($wishlistItems)) 
        { 
            foreach($wishlistItems as $wishlistItem)
            {
                if($wishlistItem->products)
                {
                    foreach($wishlistItem->products as $product)
                    {
                        if($product->id === $wishlistItem->product_id)
                        {
                            $finalItems[$wishlistItem->product_id]['id'] = $product->id;
                            $finalItems[$wishlistItem->product_id]['name'] = $product->name;
                            $finalItems[$wishlistItem->product_id]['image'] = $product->image_name;
                            $finalItems[$wishlistItem->product_id]['quantity'] = $wishlistItem->quantity;
                            $finalItems[$wishlistItem->product_id]['sale_price'] = $wishlistItem->price;
                            $finalItems[$wishlistItem->product_id]['total'] = $wishlistItem->price*$wishlistItem->quantity;

                            $finalAmount += $wishlistItem->price*$wishlistItem->quantity;
                            $finalItems['totalAmount'] = $finalAmount;
                        }
                    }
        
                } 
            }
            
        }

            return response()->json($finalItems);
        }
    }

    public function decrementItemInWishlist(Request $request) 
    {
        
        $wishlist = Wishlist::where('product_id', $request->get('product_id'))->decrement('quantity');

        if($wishlist) 
        {
            $wishlistItems = Wishlist::with('products')->where('user_id', auth()->user()->id)->get(); 

            $finalItems = [];
            $finalAmount = 0;

        if(isset($wishlistItems)) 
        { 
            foreach($wishlistItems as $wishlistItem)
            {
                if($wishlistItem->products)
                {
                    foreach($wishlistItem->products as $product)
                    {
                        if($product->id === $wishlistItem->product_id)
                        {
                            $finalItems[$wishlistItem->product_id]['id'] = $product->id;
                            $finalItems[$wishlistItem->product_id]['name'] = $product->name;
                            $finalItems[$wishlistItem->product_id]['image'] = $product->image_name;
                            $finalItems[$wishlistItem->product_id]['quantity'] = $wishlistItem->quantity;
                            $finalItems[$wishlistItem->product_id]['sale_price'] = $wishlistItem->price;
                            $finalItems[$wishlistItem->product_id]['total'] = $wishlistItem->price*$wishlistItem->quantity;

                            $finalAmount += $wishlistItem->price*$wishlistItem->quantity;
                            $finalItems['totalAmount'] = $finalAmount;
                        }
                    }
        
                } 
            }
            
        }

            return response()->json($finalItems);
        }
    }

    public function deleteItemInWishlist(Request $request) 
    {
        $wishlist = Wishlist::where('product_id', $request->get('product_id'))->delete();

        if($wishlist) 
        {
            $wishlistItems = Wishlist::with('products')->where('user_id', auth()->user()->id)->get(); 

            $finalItems = [];
            $finalAmount = 0;

        if(isset($wishlistItems)) 
        { 
            foreach($wishlistItems as $wishlistItem)
            {
                if($wishlistItem->products)
                {
                    foreach($wishlistItem->products as $product)
                    {
                        if($product->id === $wishlistItem->product_id)
                        {
                            $finalItems[$wishlistItem->product_id]['id'] = $product->id;
                            $finalItems[$wishlistItem->product_id]['name'] = $product->name;
                            $finalItems[$wishlistItem->product_id]['image'] = $product->image_name;
                            $finalItems[$wishlistItem->product_id]['quantity'] = $wishlistItem->quantity;
                            $finalItems[$wishlistItem->product_id]['sale_price'] = $wishlistItem->price;
                            $finalItems[$wishlistItem->product_id]['total'] = $wishlistItem->price*$wishlistItem->quantity;

                            $finalAmount += $wishlistItem->price*$wishlistItem->quantity;
                            $finalItems['totalAmount'] = $finalAmount;
                        }
                    }
        
                } 
            }
            
        }

            return response()->json($finalItems);
        }
    }

    public function moveToCart(Request $request) 
    {
        $product = Product::find($request->get('product_id'));

        $productInCart = Cart::where('product_id', $request->get('product_id'))->pluck('id');

        if($productInCart->isEmpty()) {
            
            // Create New Product on Cart
            $cart = Cart::create([
                'product_id' => $product->id,
                'user_id' => auth()->user()->id,
                'quantity' => $request->get('quantity'),
                'price' => $product->sale_price, 
            ]);
        } else {

            // Increment Item Quantity on Cart
            $cart = Cart::where('product_id', $request->get('product_id'))->increment('quantity');
        }

        if($cart) {
            $wishlist = Wishlist::where('product_id', $request->get('product_id'))->delete();

            return [
                'message' => 'Moved to Cart',
                'list' => Wishlist::where('user_id', auth()->user()->id)->get(),
            ];
        }
    }

}
