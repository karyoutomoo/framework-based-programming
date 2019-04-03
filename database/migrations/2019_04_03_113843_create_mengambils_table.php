<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMengambilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengambils', function (Blueprint $table) {
            $table->string('id_krs',15);
            $table->primary('id_krs');
            $table->string('nrpmhs',15)->index();
            $table->string('kelasdiambil',15)->index();
            $table->string('nilai',15);
            $table->timestamps();
        });

        Schema::table('mengambils',function($table){
            $table->foreign('nrpmhs')
                ->references('nrp')
                ->on('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('mengambils',function($table){
            $table->foreign('kelasdiambil')
                ->references('id_kelas')
                ->on('mengajars')
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
        Schema::dropIfExists('mengambils');
    }
}
