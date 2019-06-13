<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressAuthorToLhnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lhnews', function (Blueprint $table) {
            
            $table->string('address',255)->default('')->comment('地点');
            $table->string('author',30)->default('')->comment('来源');

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
           $table->dropColumn('address');
           $table->dropColumn('author');
        });
    }
}
