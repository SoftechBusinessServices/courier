<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
            $table->string('logistic_name')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('vendor_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // $table->foreignId('country_id');
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->text('vendor_address')->nullable();
            $table->string('vendor_phone')->nullable();
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
        Schema::dropIfExists('logistics');
    }
}
