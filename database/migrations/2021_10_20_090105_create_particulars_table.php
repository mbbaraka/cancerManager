<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->string('officer_id')->references('id')->on('officers')->onDelete('cascade');
            $table->string('refered_by')->nullable();
            $table->enum('status', ['Positive', 'Suspect'])->default('Suspect');
            $table->string('stage')->nullable();
            $table->string('treatment')->nullable();
            $table->string('description')->nullable();
            $table->string('attachments')->nullable();
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
        Schema::dropIfExists('diagnosis');
    }
}
