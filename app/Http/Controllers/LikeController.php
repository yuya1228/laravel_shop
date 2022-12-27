<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function _construct()
    {
        $this->middleware(['auth','verified'])->only(['like','unlike']);
    }
    public function like($id)
    {
        Like::create([
            'shop_id'=>$id,
            'user_id'=>Auth::id(),
        ]);

        return redirect()->back;
    }

    public function unlike($id)
    {
        $like = Like::where('shop_id',$id)->where('user_id',Auth::id())->first();
        $like->delete();

        return redirect()->back();
    }
}
