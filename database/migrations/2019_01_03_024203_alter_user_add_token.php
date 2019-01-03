<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUserAddToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //Schema::table('users', function (Blueprint $table) {
            //Add api_token field
            //$table->string('api_token', 60)->unique();
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::table('users', function (Blueprint $table) {
            //$table->dropColumn('role_id');
        //});
    }
}
