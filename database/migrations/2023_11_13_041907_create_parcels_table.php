<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->integer('shop_id');
            $table->integer('parcel_type_id');
            $table->integer('thana_id');
            $table->string('address');
            $table->decimal('weight');
            $table->integer('customer_id');
            $table->decimal('delivery_charge');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('parcels');
    }
};
