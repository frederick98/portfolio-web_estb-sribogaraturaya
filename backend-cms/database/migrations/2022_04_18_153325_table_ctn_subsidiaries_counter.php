<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCtnSubsidiariesCounter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table
        Schema::create('ctn_subsidiaries_counter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_subsidiaries');
            $table->string('name');
            $table->string('logo');
            $table->string('value')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('created_time')->nullable();
            $table->string('created_by', 45)->nullable();
            $table->timestamp('updated_time')->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->timestamp('deleted_time')->nullable();
            $table->string('deleted_by', 45)->nullable();
            $table->foreign('id_subsidiaries')->references('id')->on('ctn_subsidiaries');
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
        Schema::dropIfExists('ctn_subsidiaries_counter');
    }
}
