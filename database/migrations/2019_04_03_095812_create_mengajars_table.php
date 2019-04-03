<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMengajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengajars', function (Blueprint $table) {
            $table->string('id_kelas',15);
            $table->primary('id_kelas');
            $table->string('nipdosenwali',15)->index();
            $table->string('kode_matkul',15)->index();
            $table->string('kelas',15);
            $table->timestamps();
        });

        Schema::table('mengajars',function($table){
            $table->foreign('nipdosenwali')
                ->references('nip')
                ->on('dosens')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('mengajars',function($table){
            $table->foreign('kode_matkul')
                ->references('kode_mk')
                ->on('matakuliahs')
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
        Schema::dropIfExists('mengajars');
    }
}
