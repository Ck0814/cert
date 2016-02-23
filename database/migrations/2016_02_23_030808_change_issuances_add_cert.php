<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIssuancesAddCert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('issuances', function (Blueprint $table) {
            $table->text('cert')->after('zip_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('issuances', function (Blueprint $table) {
            $table->dropColumn('cert');
        });
    }
}
