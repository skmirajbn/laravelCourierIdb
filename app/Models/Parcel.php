<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model {
    use HasFactory;

    protected $guarded = [];

    public function deliveryCharge($weight) {
        // the base delivery charge is 60 if more than 2 kg weight then per kg 20 will be added
        if ($weight > 2) {
            return 60 + ($weight - 2) * 20;
        } else {
            return 60;
        }
    }
}
