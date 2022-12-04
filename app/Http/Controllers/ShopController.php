<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use Database\Seeders\DatabaseSeeder;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        $genres = Genre::all();
        $areas = Area::all();
        return view('shops.index',compact("shops","genres","areas"));
    }

    public function show(Request $request)
    {
        $shops =Shop::all();
        return view('shops.show',compact('shops'));
    }
}
