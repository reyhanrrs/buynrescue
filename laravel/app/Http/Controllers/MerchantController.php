<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreMerchantRequest;
// use App\Http\Requests\UpdateMerchantRequest;
use App\Models\Merchant;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('join-merchant');
    }

    public function store(Request $request)
    {
        $merchant = new Merchant();

        $merchant->name = $request->name;
        $merchant->description = $request->description;
        $merchant->address = $request->address;
        $merchant->is_open = 1;
        $merchant->save();
        $merchant_id = $merchant->id;

        User::where("id", auth()->id())->update(['merchant_id' => $merchant_id]);

        return redirect('');
    }

    public function setting(Request $request)
    {
        $user = Auth::user();
        $merchant_id = $user->merchant_id;

        return view('merchant.product', [
            "merchant" => $user->merchant,
            "products" => Product::where('merchant_id', $merchant_id)->get()
        ]);
    }


    public function show(Merchant $merchant)
    {
        //
    }
    public function edit(Merchant $merchant)
    {
        //
    }
    public function update(Request $request, Merchant $merchant)
    {
        //
    }
    public function destroy(Merchant $merchant)
    {
        //
    }
}
