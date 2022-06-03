<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('nama_web');
            $table->string('link_url');
            $table->string('lokasi');
            $table->longText('deskripsi');
            $table->integer('domain_authority');
            $table->integer('citation_flow');
            $table->integer('reffering_domain');
            $table->integer('banyak_visitor'); //visitor perbulan
            $table->string('main_traffic'); //Lalu Lintas Utama
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
        Schema::dropIfExists('media');
    }
}
