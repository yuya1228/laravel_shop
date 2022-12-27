<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReserveRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Shop_user;
use App\Models\Like;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $areas = $request->input('areas');
        $genres = $request->input('genres');
        $keyword = $request->input('keyword');

        $query = Shop::query();

        $query->join('areas','shops.area_id', '=', 'areas.id')
        ->join('genres','shops.genre_id','=','genres.id')->get();

        if(!empty($areas)){
            $query->where('area','LIKE',$areas);
        }

        if(!empty($genres)){
            $query->where('genre','LIKE',$genres);
        }

        if(!empty($keyword)){
            $query->where('shop_name','LIKE',"%{$keyword}%");
        }

        $items=$query->get();

        $shops =Shop::all();
        $genres = Genre::all();
        $areas = Area::all();
        return view('shops.index',compact('items','shops', 'keyword','genres','areas'));
    }

    public function detail($id)
    {
        $shops = Shop::find($id);
        $genres = Genre::find($id);
        $areas = Area::find($id);
        $shop_users = Shop_user::find($id);
        return view('shops.detail',compact('shops','genres','areas','shop_users'));
    }

    public function reserve(ReserveRequest $request)
    {
        $shop_users = New Shop_user();
        $shop_users->user_id = Auth::id();
        $shop_users->shop_id = $request->input('shop_id');
        $shop_users->date_start = $request->input('date_start');
        $shop_users->time_start = $request->input('time_start');
        $shop_users->sum_people = $request->input('sum_people');
        $shop_users->save();
        return redirect()->route('shops.done');
    }

    public function done()
    {
        return view('shops.done');
    }

    public function _construct()
    {
        $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
    }
    public function like($id)
    {
        Like::create([
            'shop_id' => $id,
            'user_id' => Auth::id(),
        ]);

        return back();
    }

    public function unlike($id)
    {
        $like = Like::where('shop_id', $id)->where('user_id', Auth::id())->first();
        $like->delete();

        return back();
    }
}
