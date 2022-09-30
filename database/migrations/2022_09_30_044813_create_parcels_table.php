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
            $table->string('pl_boxes')->nullable();
            $table->string('pl_weight')->nullable();
            $table->foreignId('service_id')->nullable();
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->string('pl_charges')->nullable();
            $table->string('pl_extras')->nullable();
            $table->string('pl_discount')->nullable();
            $table->string('pl_final')->nullable();
            $table->text('pl_description')->nullable();
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
