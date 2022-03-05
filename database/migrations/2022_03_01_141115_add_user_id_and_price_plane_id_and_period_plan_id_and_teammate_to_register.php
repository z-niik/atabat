<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdAndPricePlaneIdAndPeriodPlanIdAndTeammateToRegister extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registers', function (Blueprint $table) {
            $table->mediumInteger('user_id');
            $table->mediumInteger('price_plane_id');
            $table->mediumInteger('period_plan_id');
            $table->json('teammate');
        });
        Schema::table('registers', function (Blueprint $table) {

            $table->dropColumn(['mellicode', 'phone' ,'birthday' , 'period' ,'state,']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register', function (Blueprint $table) {
            //
        });
    }
}
