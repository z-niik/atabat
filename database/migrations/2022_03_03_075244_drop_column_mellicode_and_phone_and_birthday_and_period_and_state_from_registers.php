<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnMellicodeAndPhoneAndBirthdayAndPeriodAndStateFromRegisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registers', function (Blueprint $table) {
                $table->dropColumn('melli_code');
                $table->dropColumn('phone');
                $table->dropColumn('birthday');
                $table->dropColumn('period');
                $table->dropColumn('state');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registers', function (Blueprint $table) {
            //
        });
    }
}
