<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommonNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_names', function($table) {
            $table->increments('id');
            $table->string('mail', 200)->unique();
            $table->string('family_name', 50);
            $table->string('given_name', 50);
            $table->timestamps();
            $table->index('family_name');
            $table->index('given_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('common_names');
    }
}
