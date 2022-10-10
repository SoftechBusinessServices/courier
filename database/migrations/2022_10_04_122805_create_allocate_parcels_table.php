<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocate_parcels', function (Blueprint $table) {
            $table->id();
            $table->integer('pl_id')->nullable();
            $table->Integer('service_id')->nullable();
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->Integer('vendor_id')->nullable();
              // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            // $table->string('vendor_tracking_id')->nullable();
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
        Schema::dropIfExists('allocate_parcels');
    }
}
