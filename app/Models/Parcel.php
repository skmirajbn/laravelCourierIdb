<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model {
    use HasFactory;

    protected $guarded = [];
    public function customer() {
        return $this->belongsTo(Customer::class);
    }
    public function shop() {
        return $this->belongsTo(Shop::class);
    }
    public function parcelType() {
        return $this->belongsTo(ParcelType::class);
    }
    public function thana() {
        return $this->belongsTo(Thana::class);
    }

    public function deliveryCharge($weight) {
        // the base delivery charge is 60 if more than 2 kg weight then per kg 20 will be added
        if ($weight > 2) {
            return 60 + ($weight - 2) * 20;
        } else {
            return 60;
        }
    }
}
