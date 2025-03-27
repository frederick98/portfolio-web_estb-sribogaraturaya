<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCtnAchievement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ctn_achievement', function (Blueprint $table) {
            $table->string('alt_text')->nullable()->default("#");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ctn_achievement', function (Blueprint $table) {
            $table->dropColumn(['alt_text']);
        });
    }
}
