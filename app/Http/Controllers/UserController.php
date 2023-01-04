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

        $like = Like::where('user_id',\Auth::user()->id)->get();

        $shop_users = Shop_user::where('user_id',\Auth::user()->id)->get();
        return view('user.mypage',compact('items','shop_users','like'));
    }

    public function destroy($id)
    {
        $shop_users = Shop_user::find($id);
        $shop_users->delete();

        return redirect()->route('user.mypage');
    }

    public function update(Request $request)
    {
        $shop_users = Shop_user::find($request->user_id);
        $shop_users->update([
            "date_start" => $request->date_start,
            "time_start" => $request->time_start,
            "sum_people" => $request->sum_people,
        ]);

        return redirect()->route("user.mypage");
    }
}
