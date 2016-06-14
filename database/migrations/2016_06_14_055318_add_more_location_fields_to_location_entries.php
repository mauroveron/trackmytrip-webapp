<?php

use Illuminate\Database\Migrations\Migration;

class AddMoreLocationFieldsToLocationEntries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('location_entries', function($table) {
            $table->double('altitude', 10, 6)->nullable();
            $table->double('speed', 10, 6)->nullable();
            $table->double('course', 10, 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location_entries', function($table) {
            $table->dropColumn('altitude');
            $table->dropColumn('speed');
            $table->dropColumn('course');
        });
    }
}
