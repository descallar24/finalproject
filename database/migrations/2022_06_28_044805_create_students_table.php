<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('studid');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('MI');
            $table->string('course');
            $table->string('yearlevel');
            $table->string("user_level")->default("user");
            $table->string("status")->default("active");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
