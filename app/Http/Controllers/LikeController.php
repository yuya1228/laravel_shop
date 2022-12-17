<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shop;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Shop $shops, Request $request)
    {
        $like=New Like();
        $like->shop_id=$shops->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }

    public function unlike(Shop $shops, Request $request)
    {
        $user=Auth::user()->id;
        $like=Like::where('shop_id',$shops->id)->where('user_id',$user)->first();
        $like->delete();
        return back();
    }
}
