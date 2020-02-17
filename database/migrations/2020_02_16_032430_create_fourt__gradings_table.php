<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFourtGradingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fourt__gradings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('subject_id');
            $table->tinyInteger('teacher_id');
            $table->tinyInteger('user_id');
            $table->bigInteger('grades');
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
        Schema::dropIfExists('fourt__gradings');
    }
}
