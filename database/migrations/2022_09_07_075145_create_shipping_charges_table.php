<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->nullable();
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreignId('country_id')->nullable();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreignId('currency_id')->nullable();
            // $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->string('symbol')->nullable();
            // $table->string('gm0_500')->nullable();
            // $table->string('gm501_1000')->nullable();
            // $table->string('gm1001_1500')->nullable();
            // $table->string('gm1501_2000')->nullable();
            // $table->string('gm2001_5000')->nullable();
            // $table->string('gm5000_above')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_charges');
    }
}
