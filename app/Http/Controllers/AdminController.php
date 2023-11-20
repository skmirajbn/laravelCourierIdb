<?php

namespace App\Http\Controllers;

use App\Models\Shop;

class AdminController extends Controller {
    public function index() {
        return view('admin.index');
    }
    public function allShops() {
        $allShops = Shop::with('thana.district', )->get();
        return view('admin.pages.shop.allShops', compact('allShops'));
    }
}
