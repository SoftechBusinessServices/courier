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
            $table->string('parcel_id')->nullable();
            $table->unsignedBigInteger('shipper_id')->nullable();
            $table->foreign('shipper_id')->references('id')->on('parcel_shippers')->onDelete('cascade');
            $table->unsignedBigInteger('consignee_id')->nullable();
            $table->foreign('consignee_id')->references('id')->on('parcel_consignees')->onDelete('cascade');
            $table->integer('pl_boxes')->nullable();
            $table->float('pl_weight')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->float('pl_charges')->nullable();
            $table->float('pl_extras')->nullable();
            $table->float('pl_discount')->nullable();
            $table->float('pl_final')->nullable();
            $table->longText('pl_description')->nullable();
            $table->enum('pl_status', ['processed','allocated','intransit','delivered','cancelled'])->default('processed');
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
