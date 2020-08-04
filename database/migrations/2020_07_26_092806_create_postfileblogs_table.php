<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostfileblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postfileblogs', function (Blueprint $table) {
            $table->bigIncrements('postfil_blog_id');
            $table->unsignedBigInteger('blog_id')->index();
            $table->string('fichiers');
            $table->string('legende');
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
        Schema::dropIfExists('postfileblogs');
    }
}
