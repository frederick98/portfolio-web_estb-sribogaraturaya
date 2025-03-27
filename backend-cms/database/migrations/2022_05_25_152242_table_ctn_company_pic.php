<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCtnCompanyPic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table ctn_company_pic
        Schema::create('ctn_company_pic', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->string('captions')->default("#")->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('created_time')->nullable();
            $table->string('created_by', 45)->nullable();
            $table->timestamp('updated_time')->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->timestamp('deleted_time')->nullable();
            $table->string('deleted_by', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop existing table
        Schema::dropIfExists('ctn_company_pic');
    }
}
