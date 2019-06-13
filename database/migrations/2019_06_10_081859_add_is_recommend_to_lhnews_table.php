<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsRecommendToLhnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lhnews', function (Blueprint $table) {
            $table->tinyInteger('isRecommend')->default(0)->comment('左侧推荐动态');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lhnews', function (Blueprint $table) {
           $table->dropColumn('isRecommend');
        });
    }
}
