<?php

namespace App\Http\Controllers;

use App\Models\Thana;
use App\Http\Requests\StoreThanaRequest;
use App\Http\Requests\UpdateThanaRequest;

class ThanaController extends Controller {
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreThanaRequest $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Thana $thana) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thana $thana) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThanaRequest $request, Thana $thana) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thana $thana) {
        //
    }

    /**
     * Api to get thana information
     */
    public function all() {
        $thanas = Thana::all();
        return response()->json($thanas);
    }
    public function one($id) {
        $thana = Thana::find($id);
        return response()->json($thana);
    }
    public function byDistrict($id) {
        $thanas = Thana::where('district_id', $id)->get();
        return response()->json($thanas);
    }

}
