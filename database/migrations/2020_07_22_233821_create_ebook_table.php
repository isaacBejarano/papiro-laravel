<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook', function (Blueprint $table) {
          $table->bigIncrements('id')->autoIncrement();
          $table->string('title', 50);
          $table->string('author', 30);
          $table->string('path', 50);
          $table->string('alt', 50);
          $table->string('description', 1500);
          $table->string('publisher', 30);
          $table->year('year', 4);
          $table->unsignedSmallInteger('pages', 5);
          $table->bigInteger('ISBN', 13);
          $table->string('lang', 15);
          $table->string('tag', 15);
          $table->string('category', 15);
          $table->string('sectionTag', 15);
          $table->string('section', 15);
          // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebook');
    }
}