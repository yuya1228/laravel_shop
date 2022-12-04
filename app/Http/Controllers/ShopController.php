<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Database\Seeders\DatabaseSeeder;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index')->with(['shops' => $shops]);
    }

    public function show(Request $request)
    {
        $shops =Shop::all();
        return view('shop.show',compact('shops'));
    }
}
