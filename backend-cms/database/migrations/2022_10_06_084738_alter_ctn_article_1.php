<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCtnArticle1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ctn_article', function (Blueprint $table) {
            $table->string('hashtag')->nullable()->default("#");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ctn_article', function (Blueprint $table) {
            $table->dropColumn(['hashtag']);
        });
    }
}
