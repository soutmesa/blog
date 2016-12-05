<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 50);
            $table->string('gender', 10);
            $table->string('email', 50)->unique();
            $table->string('phone', 15);
            $table->string('m_name', 50);
            $table->string('f_name', 50);
            $table->string('m_phone', 15);
            $table->string('f_phone', 15);
            $table->date('date_of_birth');
            $table->text('place_of_birth');
            $table->string('profile');
            $table->text('address');
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
        Schema::drop('students');
    }
}
