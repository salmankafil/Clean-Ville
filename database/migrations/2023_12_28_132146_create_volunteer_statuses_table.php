<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('volunteer_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('event_id')->constrained();
            $table->enum('status', ['Completed', 'Pending', 'In Progress']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('volunteer_statuses');
    }
}
