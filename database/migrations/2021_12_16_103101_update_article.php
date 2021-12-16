<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('article');
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('description');
        });
    }
}
