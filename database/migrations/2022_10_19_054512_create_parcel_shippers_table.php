<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelShippersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_shippers', function (Blueprint $table) {
            $table->id();
            // $table->integer('pl_id')->nullable();
            $table->date('pl_date')->nullable();
            $table->string('company_name')->nullable();
            $table->string('shipper_phone')->nullable();
            $table->foreignId('shipper_country_id')->nullable();
            // $table->foreignId('region_id');
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->string('shipper_state')->nullable();
            $table->string('shipper_city')->nullable();
            $table->string('shipper_zip')->nullable();
            $table->text('shipper_address1')->nullable();
            $table->text('shipper_address2')->nullable();
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
        Schema::dropIfExists('parcel_shippers');
    }
}
