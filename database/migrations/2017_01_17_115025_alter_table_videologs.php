<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVideologs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videologs', function (Blueprint $table) {
            //
            $table->integer('userlog_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videologs', function (Blueprint $table) {
            //
            $table->dropColumn('userlog_id');
        });
    }
}
