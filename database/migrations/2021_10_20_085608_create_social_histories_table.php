<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_histories', function (Blueprint $table) {
            $table->id();
            $table->string('pat_id');
            $table->string('marital_status')->nullable();
            $table->string('tobaco_use')->nullable();
            $table->string('duration_of_use')->nullable();
            $table->string('packs_per_day')->nullable();
            $table->string('alcohol_use')->nullable();
            $table->string('bottles_per_day')->nullable();
            $table->timestamps();

            $table->foreign('pat_id')->references('patient_id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_histories');
    }
}
