<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clothes = DB::table('products')->where('category', 'clothing')->latest()->limit(6)->get();
        $shoes = DB::table('products')->where('category', 'shoes')->latest()->limit(6)->get();
        $kids = DB::table('products')->where('category', 'kids')->latest()->limit(6)->get();
        $jewelleries = DB::table('products')->where('category', 'jewellery')->latest()->limit(6)->get();

        return view('home', compact('clothes', 'shoes', 'kids', 'jewelleries'));
    }
}
