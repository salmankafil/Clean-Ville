<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventVolunteers extends Migration
{
 
    public function up()
{
    Schema::create('event_volunteers', function (Blueprint $table) {
        $table->id();
        $table->foreignId('event_id')->constrained();
        $table->foreignId('user_id')->constrained();
        $table->foreignId('task_id')->nullable()->constrained(); 
        $table->date('preferred_date');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('event_volunteers');
    }
}
