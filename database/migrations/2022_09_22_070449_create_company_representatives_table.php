<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_representatives', function (Blueprint $table) {
                $table->id();
                $table->foreignId('company_id');
                // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
                $table->text('represent_name')->nullable();
                $table->string('represent_email')->nullable();
                $table->string('represent_phone')->nullable();
                $table->text('represent_cnic')->nullable();
                // $table->text('represent_address')->nullable();
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
        Schema::dropIfExists('company_representatives');
    }
}
