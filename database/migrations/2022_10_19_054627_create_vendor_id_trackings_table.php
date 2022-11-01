<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorIdTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_id_trackings', function (Blueprint $table) {
            $table->id();
            $table->integer('pl_id')->nullable();
            $table->Integer('vendor_id')->nullable();
            // $table->unsignedBigInteger('pl_id')->nullable();
            // $table->foreign('pl_id')->references('id')->on('parcels')->onDelete('cascade');
            // $table->unsignedBigInteger('vendor_id')->nullable();
            // $table->foreign('vendor_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('vendor_tracking_id')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
            // $table->integer('pl_id')->nullable();
            // $table->Integer('vendor_id')->nullable();

            // $table->Integer('vendor_id')->nullable();
            // $table->string('vendor_tracking_charges')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_id_trackings');
    }
}
