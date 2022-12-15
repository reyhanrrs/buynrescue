<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{

    public function index()
    {
        return view('user.favorite', [
            "favorites" => Favorite::where('user_id', auth()->user()->id)->get()
        ]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request, $product_id)
    {   
        $favorite = new Favorite;

        $favorite->user_id = auth()->user()->id;
        $favorite->product_id = $product_id;

        $favorite->save();
        return back();
    }


    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Favorite $favorite, $fav_id)
    {       
        $favorite->destroy($fav_id);
        return back();
    }
}
