<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class TableAboutUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // create table
        Schema::create('ctn_about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mission1_txt');
            $table->string('mission2_txt');
            $table->string('mission3_txt');
            $table->string('vision1_txt');
            $table->string('vision2_txt');
            $table->string('vision3_txt');
            $table->string('quote_txt');
            $table->string('title_tag', 100)->nullable();
            $table->text('canonical_tag')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keyword')->nullable();
            $table->text('url_slug');
            $table->integer('status')->default(1);
            $table->timestamp('created_time')->nullable();
            $table->string('created_by', 45)->nullable();
            $table->timestamp('updated_time')->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->timestamp('deleted_time')->nullable();
            $table->string('deleted_by', 45)->nullable();
        });

        // init data to db
        DB::table('ctn_about')->insert(
            array(
                [
                    'id' => 1,
                    'mission1_txt' => 'Be the food company of choice in services, ingredients, and logistics.',
                    'mission2_txt' => 'Provide halal, hygiene, safe food products.',
                    'mission3_txt' => 'That loves and is loved by the community where we belong.', 
                    'vision1_txt' => 'Integrity & Reliability.', 
                    'vision2_txt' => 'Determined & Committed.', 
                    'vision3_txt' => 'Continuous Profitable Growth.', 
                    'quote_txt' => 'Staying true to the traditional values of Sriboga, we actively engage in collaboration and dialogue with local communities and work towards sustainable development to support the economy.',
                    'url_slug' => '/about-us',
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
        Schema::dropIfExists('ctn_about');
    }
}
