<?php

use Illuminate\Support\Facades\Schema;
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
           //$table->bigIncrements('id');
            $table->string('nrp',15);
            $table->primary('nrp');
            $table->string('nama',100);
            $table->string('nipdosenwali',15)
                ->index();
            $table->timestamps();
        });

        Schema::table('students',function($table){
            $table->foreign('nipdosenwali')
                ->references('nip')
                ->on('dosens')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
