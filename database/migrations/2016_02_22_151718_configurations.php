<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Configurations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function($table) {
            $table->increments('id');
            $table->string('country_name', 2)->default('JP');
            $table->string('state_name', 50)->default('Tokyo');
            $table->string('locality_name', 50)->default('Chuo-ku');
            $table->string('organization_name', 50)->default('Nijibox Co.Ltd');
            $table->string('unit_name', 50);
            $table->integer('active_day')->default(180);
            $table->integer('update_mail_day')->default(7);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configurations');
    }
}
