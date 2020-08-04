<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *formateurmodels
     * @return void
     */
    public function up()
    {
        Schema::create('formation_models', function (Blueprint $table) {
            $table->bigIncrements('formation_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
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
        Schema::dropIfExists('formation_models');
    }
}
