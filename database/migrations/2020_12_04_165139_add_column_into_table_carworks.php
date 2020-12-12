<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIntoTableCarworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('carworks', function (Blueprint $table) {
            $table->string('embeded_url')->nullable();
            $table->string('service_type')->nullable();
            $table->string('PhoneNo')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carworks', function($table) {
            $table->dropColumn('embeded_url');
            $table->dropColumn('service_type');
        });
        //
    }
}
