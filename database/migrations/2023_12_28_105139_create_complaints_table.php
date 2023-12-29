<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('description');
            $table->string('complaint_type', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('complaints', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
    
        Schema::dropIfExists('complaints');
    }
}
