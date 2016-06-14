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
            $table->double('longitude', 10, 6);
            $table->double('latitude', 10, 6);
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
