<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_histories', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->string('relative');
            $table->enum('type', ['father', 'mother', 'sister', 'brother', 'son', 'daughter', 'grand', 'uncle', 'auntie']);
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
        Schema::dropIfExists('family_histories');
    }
}
