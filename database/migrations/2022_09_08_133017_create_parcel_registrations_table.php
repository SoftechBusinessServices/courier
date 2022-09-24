<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('pl_id')->nullable();
            $table->date('pl_date')->nullable();
            $table->foreignId('region_id');
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->foreignId('country_id');
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            // $table->string('chargeable_weight')->nullable();
            // $table->foreignId('currency_id');
            // $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->string('pl_symbol')->nullable();
            $table->string('pl_weight')->nullable();
            $table->string('pl_cost')->nullable();
            $table->string('pl_extras')->nullable();
            $table->string('pl_discount')->nullable();
            $table->string('pl_final')->nullable();
            $table->string('pl_description')->nullable();
            $table->string('cust_name')->nullable();
            $table->string('cust_phone')->nullable();
            $table->text('cust_address')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('represent_id')->nullable();
            $table->enum('pl_status', ['processed','cancelled','allocated','delivered','returned'])->default('processed');
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
        Schema::dropIfExists('parcel_registrations');
    }
}
