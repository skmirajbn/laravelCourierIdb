<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParcelRequest;
use App\Http\Requests\UpdateParcelRequest;
use App\Models\Customer;
use App\Models\District;
use App\Models\Parcel;
use App\Models\ParcelType;
use App\Models\Shop;
use App\Models\Tracking;
use Illuminate\Support\Facades\DB;

class ParcelController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //usre's shop list
        $shops = Shop::where('user_id', auth()->user()->id)->get();
        $parcelTypes = ParcelType::all();
        $districts = District::all();
        return view('admin.pages.parcel.createParcel', compact('shops', 'parcelTypes', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParcelRequest $request) {
        DB::transaction(function () use ($request) {
            $customer = Customer::firstOrCreate(['phone' => $request->phone], [
                'name' => $request->name
            ]);

            $parcel = new Parcel();
            $parcel->shop_id = $request->shop_id;
            $parcel->parcel_type_id = $request->parcel_type_id;
            $parcel->thana_id = $request->thana_id;
            $parcel->address = $request->address;
            $parcel->weight = $request->weight;
            $parcel->customer_id = $customer->id;
            $parcel->delivery_charge = $parcel->deliveryCharge($request->weight);
            $parcel->status = 0;
            $parcel->save();

            // Iput to tracking table one entry about the parcel
            $tracking = new Tracking();
            $tracking->parcel_id = $parcel->id;
            $tracking->message = 'Order Placed';
            $tracking->isLast = 0;
            $tracking->status = 1;
            $tracking->color = "red";
            $tracking->save();
        });
        dd('inserted');
    }

    /**
     * Display the specified resource.
     */
    public function trackParsel(Parcel $parcel) {
        $trackings = Tracking::where('parcel_id', $parcel->id)->get();
        return view('admin.pages.parcel.trackParsel', compact('parcel', 'trackings'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Parcel $parcel) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parcel $parcel) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParcelRequest $request, Parcel $parcel) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parcel $parcel) {
        //
    }
}
