<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_charges', function (Blueprint $table) {
            $table->id();
            $table->text('pl_id')->nullable();
            // $table->foreign('pl_id')->references('id')->on('parcels')->onDelete('cascade');
            $table->string('vendor_tracking_charges')->nullable();
            // $table->Integer('vendor_id')->nullable();
            // $table->string('vendor_tracking_charges')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_charges');
    }
}
