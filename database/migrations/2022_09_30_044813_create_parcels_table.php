<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('pl_id')->nullable();
            $table->integer('pl_boxes')->nullable();
            $table->float('pl_weight')->nullable();
            $table->foreignId('service_id')->nullable();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('shipper_country_id')->nullable();
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable();
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->float('pl_charges')->nullable();
            $table->float('pl_extras')->nullable();
            $table->float('pl_discount')->nullable();
            $table->float('pl_final')->nullable();
            $table->longText('pl_description')->nullable();
            $table->enum('pl_status', ['processed','allocated','delivered','returned','cancelled'])->default('processed');
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
        Schema::dropIfExists('parcels');
    }
}
