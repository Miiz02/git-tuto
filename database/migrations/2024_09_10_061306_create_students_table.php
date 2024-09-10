<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_student'); // Student name
            $table->string('ndp')->unique(); // Student ID or matriculation number
            $table->string('kursus'); // Course
            $table->string('sesi_kemasukan'); // Admission session
            $table->string('no_tel'); // Phone number
            $table->string('alamat'); // Address
            $table->string('emel')->unique(); // Email
            $table->timestamps(); // Created at and updated at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
