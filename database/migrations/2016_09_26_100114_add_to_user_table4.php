<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToUserTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {DB::statement('SET FOREIGN_KEY_CHECKS=0;');
     Schema::table('users', function (Blueprint $table) {
	    $table->foreign('pokemon_id')->references('id')->on('pokemon');
        });
	DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
