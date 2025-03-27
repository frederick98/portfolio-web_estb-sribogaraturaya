<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class TableCtnContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table
        Schema::create('ctn_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->text('url_slug');
            $table->string('title_tag', 100)->nullable();
            $table->text('canonical_tag')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->timestamp('created_time')->nullable();
            $table->string('created_by', 45)->nullable();
            $table->timestamp('updated_time')->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->timestamp('deleted_time')->nullable();
            $table->string('deleted_by', 45)->nullable();
        });

        // init data to db
        DB::table('ctn_contact')->insert(
            array(
                [
                    'id' => 1,
                    'url_slug' => '/contact-us',
                    'created_time' => Carbon::now(),
                    'created_by' => 'System'
                ],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop existing table
        Schema::dropIfExists('ctn_contact');
    }
}
