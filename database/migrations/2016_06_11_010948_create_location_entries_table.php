<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_entries', function($table)
        {
            $table->increments('id')->unique();
            $table->float('longitude');
            $table->float('latitude');
            $table->string('device_identifier');
            $table->timestamp('taken_at');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_entries');
    }
}
