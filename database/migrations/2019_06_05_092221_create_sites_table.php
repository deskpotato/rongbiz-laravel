<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name','50')->comment('站点名称');
            $table->string('keyword','100')->comment('SEO关键词');
            $table->string('description','255')->comment('SEO描述');
            $table->string('copyright','255')->comment('版权信息');
            $table->string('phone','20')->comment('联系方式');
            $table->string('address','255')->comment('公司地址');
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
        Schema::dropIfExists('sites');
    }
}
