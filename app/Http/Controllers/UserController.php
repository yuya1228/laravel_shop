<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Shop_user;
use App\Models\Like;

class UserController extends Controller
{
    public function mypage(Request $id)
    {
        $query = Shop::query();

        $query->join('areas', 'shops.area_id', '=', 'areas.id')
        ->join('genres', 'shops.genre_id', '=', 'genres.id')->get();

        $items = $query->get();

        $shop_users = Shop_user::all();
        return view('user.mypage',compact('items','shop_users'));
    }
}
