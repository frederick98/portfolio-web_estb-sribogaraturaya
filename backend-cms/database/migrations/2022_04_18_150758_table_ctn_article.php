<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCtnArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table
        Schema::create('ctn_article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_topic');
            $table->integer('id_category');
            $table->string('image');
            $table->string('title', 100);
            $table->string('short_description', 160);
            $table->text('detail');
            $table->string('title_tag', 100)->nullable();
            $table->text('canonical_tag')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('url_slug');
            $table->timestamp('published_date')->nullable();
            $table->integer('status')->default(1);
            $table->timestamp('created_time')->nullable();
            $table->string('created_by', 45)->nullable();
            $table->timestamp('updated_time')->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->timestamp('deleted_time')->nullable();
            $table->string('deleted_by', 45)->nullable();
            $table->foreign('id_topic')->references('id')->on('m_topic');
            $table->foreign('id_category')->references('id')->on('m_category');
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
        Schema::dropIfExists('ctn_article');
    }
}
