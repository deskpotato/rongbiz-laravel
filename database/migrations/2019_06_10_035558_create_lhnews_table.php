<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLhnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lhnews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->string('thumb',255)->default('');
            $table->integer('hits')->default(0)->comment('浏览量');
            $table->string('introduction',255)->default('');
            $table->text('content')->nullable();
            $table->tinyInteger('category')->comment('所属分类')->default(0);
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
        Schema::dropIfExists('lhnews');
    }
}
