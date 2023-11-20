<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model {
    use HasFactory;
    //make guarded none
    protected $guarded = [];



    public function thana() {
        return $this->belongsTo(Thana::class, 'thana_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

}
