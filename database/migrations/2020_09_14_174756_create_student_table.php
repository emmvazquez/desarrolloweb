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
            $table->id();
            $table->string('apellidoPaterno',50);
            $table->string('apellidoMaterno',50);
            $table->string('nombre',50);
            $table->string('email',50);
            $table->date('fechaNacimiento');
            $table->string('status',['Baja','Baja Temporal','Baja Definitiva']);
            $table->enum('genero',['Hombre','Mujer']);
            $table->int('semestre');
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
        Schema::dropIfExists('student');
    }
}
