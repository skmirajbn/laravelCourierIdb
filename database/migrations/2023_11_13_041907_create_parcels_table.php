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
            $table->integer('delivery_thana_id');
            $table->string('delivery_address');
            $table->integer('shop_id');
            $table->integer('tracking_id');
            $table->integer('pickup_thana_id');
            $table->string('pickup_address');
            $table->decimal('weight');
            $table->integer('parcel_type_id');
            $table->integer('customer_id');
            $table->decimal('delivery_charge');
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
