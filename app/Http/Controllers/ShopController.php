<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\Reserve;

use Database\Seeders\DatabaseSeeder;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $areas = $request->input('areas');
        $genres = $request->input('genres');
        $shops = $request->input('shops');

        $query = Shop::query();

        $query->join('areas','shops.area_id', '=', 'areas.id')
        ->join('genres','shops.genre_id','=','genres.id')->get();

        if(!empty($areas)){
            $query->where('areas','LIKE','$areas');
        }

        if(!empty($genres)){
            $query->where('genres','LIKE','$genres');
        }

        if(!empty($shops)){
            $query->where('shop_name','LIKE',"%{{$shops}}%");
        }

        $items = $query->get();

        $genres = Genre::all();
        $areas = Area::all();
        return view('shops.index',compact('items','shops','genres','areas'));
    }

    public function find(Request $request)
    {
    }

    public function detail($id)
    {
        $shops = Shop::find($id);
        $genres = Genre::find($id);
        $areas = Area::find($id);
        $reserves = Reserve::all();
        return view('shops.detail',compact('shops','genres','areas','reserves'));
    }

    public function reserve(Request $request)
    {
        $reserves = New Reserve();
        $reserves->users_id = Auth::id();
        $reserves->time_start = $request->input('time_start');
        $reserves->sum_people = $request->input('sum_people');
        $reserves->save();
        return redirect()->route('shops.detail');
    }

    public function done()
    {
        return view('shops.done');
    }
}
