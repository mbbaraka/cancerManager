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
            $table->string('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->string('marital_status');
            $table->enum('tobaco_use', ['no', 'yes']);
            $table->string('duration_of_use');
            $table->string('packs_per_day');
            $table->enum('alcohol_use', ['no', 'yes']);
            $table->string('bottles_per_day');
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
        Schema::dropIfExists('social_histories');
    }
}
