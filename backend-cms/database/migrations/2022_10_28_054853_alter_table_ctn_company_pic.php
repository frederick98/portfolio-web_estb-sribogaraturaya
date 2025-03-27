<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCtnCompanyPic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ctn_company_pic', function (Blueprint $table) {
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
        Schema::table('ctn_company_pic', function (Blueprint $table) {
            $table->dropColumn(['alt_text']);
        });
    }
}
