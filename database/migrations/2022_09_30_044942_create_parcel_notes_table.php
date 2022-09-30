<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_notes', function (Blueprint $table) {
            $table->id();
            $table->string('pl_id')->nullable();
            $table->longText('disp_content')->nullable();
            $table->string('disp_condition')->nullable();
            $table->foreignId('currency_id')->nullable();
            // $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->float('disp_price')->nullable();
            $table->integer('disp_quantity')->nullable();
            $table->float('disp_total')->nullable();
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
        Schema::dropIfExists('parcel_notes');
    }
}
