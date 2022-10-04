<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('id_role');
            $table->integer('id_kodepos')->nullable();
            $table->integer('id_provinsi');
            $table->string("photo")->nullable();
            $table->string('name', 100);
            $table->string('email');
            $table->string('password');
            $table->text('alamat');
            $table->string("no_telp", 30);
            $table->date("tgl_lahir");
            $table->string('desa', 50);
            $table->string('kecamatan', 50);
            $table->string('kota_kabupaten', 50);
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
        Schema::dropIfExists('users');
    }
};
