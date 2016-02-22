<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Issuances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issuances', function($table) {
            $table->increments('id');
            $table->integer('common_id')->uniqid()->unsigned();
            // 1:new; 2:update; 3:delete;
            $table->tinyInteger('action_type')->unsigned()->default(1);
            $table->dateTime('active_start');
            $table->dateTime('active_end');
            $table->string('cert_password');
            $table->string('zip_password');
            $table->integer('creator_common_id')->uniqid()->unsigned();
            $table->tinyInteger('cert_completed')->unsigned();
            $table->tinyInteger('mail_completed')->unsigned();
            $table->timestamps();
            $table->index('common_id');
            $table->index('active_end');
            $table->foreign('common_id')->references('id')->on('common_names')->onDelete('cascade');
            $table->foreign('creator_common_id')->references('id')->on('common_names')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('issuances');
    }
}
