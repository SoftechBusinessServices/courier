<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelConsigneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_consignees', function (Blueprint $table) {
            $table->id();
            $table->integer('pl_id')->nullable();
            // $table->date('pl_date')->nullable();
            $table->string('consignee_name')->nullable();
            $table->string('consignee_phone')->nullable();
            $table->string('consignee_business')->nullable();
            // $table->foreignId('region_id');
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreignId('consignee_country_id')->nullable();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->string('consignee_state')->nullable();
            $table->string('consignee_city')->nullable();
            $table->string('consignee_zip')->nullable();
            $table->text('consignee_address1')->nullable();
            $table->text('consignee_address2')->nullable();
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
        Schema::dropIfExists('parcel_consignees');
    }
}
