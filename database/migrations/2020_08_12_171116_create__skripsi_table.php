<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkripsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_skripsi', function (Blueprint $table) {
            $table->string('id',12)->primary();
            $table->string('nim', 15);
            $table->string('nama_mahasiswa', 40);
            $table->text('judul');
            $table->string('tempat_penelitian', 55);
            $table->text('alamat');
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
        Schema::dropIfExists('_skripsi');
    }
}
