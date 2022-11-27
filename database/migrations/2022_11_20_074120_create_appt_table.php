<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appt', function (Blueprint $table) {
            $table->id();
			
			$table->text('nume');  // name
            $table->date('data');   // date
            $table->bigInteger('pos');   // queue pos
            $table->integer('cnp'); // unique id
			
            $table->timestamps();
			$table->string('cnp')->unique();
			$table->unique(['data', 'pos']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appt');
    }
};
