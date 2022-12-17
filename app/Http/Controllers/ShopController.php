<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Reserve;
use App\Models\User;

use Database\Seeders\DatabaseSeeder;

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
        $reserves = Reserve::find($id);
        return view('shops.detail',compact('shops','genres','areas','reserves'));
    }

    public function reserve(Request $request)
    {

        $reserves = New Reserve();
        $reserves->user_id = Auth::id();
        $reserves->date_start = $request->input('date_start');
        $reserves->time_start = $request->input('time_start');
        $reserves->sum_people = $request->input('sum_people');
        $reserves->save();
        return redirect()->route('shops.done');
    }

    public function done()
    {
        return view('shops.done');
    }
}
