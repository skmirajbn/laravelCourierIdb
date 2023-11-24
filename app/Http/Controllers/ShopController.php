<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Models\District;
use App\Models\Thana;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $shops = Shop::with('thana.district', )->orderBy('created_at', 'desc')->get();
        return view('admin.pages.shop.userShops', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $districts = District::all();
        return view('admin.pages.create-shop', compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Store a newly created resource in storage.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShopRequest $request) {
        $user_id = auth()->user()->id;
        $name = $request->name;
        $thana_id = $request->thana_id;
        $address = $request->address;

        DB::transaction(function () use ($name, $thana_id, $address, $user_id, $request) {
            $shop = new Shop();
            $shop->name = $name;
            $shop->thana_id = $thana_id;
            $shop->address = $address;
            $shop->user_id = $user_id;
            $shop->save();

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoName = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('images/shops/logo'), $logoName);
                $shop->logo = $logoName;
                $shop->save();
            }

            //move to the url route shops
        });

        return redirect()->route('shops');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop) {
        return view('admin.pages.shop.shop', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopRequest $request, Shop $shop) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop) {
        //
    }
}
