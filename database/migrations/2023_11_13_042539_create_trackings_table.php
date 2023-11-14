<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datetime');
            $table->string('message');
            $table->integer('status');
            $table->integer('isLast');
            $table->integer('parcel_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('trackings');
    }
};
