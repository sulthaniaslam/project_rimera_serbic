<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKonsultanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_konsultan', function (Blueprint $table) {
            $table->bigIncrements('id_konsultan');
            $table->string('nama_konsultan', '50');
            $table->string('pendidikan', '50');
            $table->string('bidang', '100');
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
        Schema::dropIfExists('tbl_konsultan');
    }
}
