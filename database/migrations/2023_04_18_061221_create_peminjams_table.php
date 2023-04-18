<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->timestamps();
        });
        DB::table('peminjams')->insert([
        	[
        		'nama' => 'Ningning',
        		'alamat' => 'Harbin',
        		'no_telp' => '231002',
        	],
        	[
        		'nama' => 'Dika',
        		'alamat' => 'Cilacap',
        		'no_telp' => '130304',
        	],
        	[
        		'nama' => 'Qq',
        		'alamat' => 'Planjan',
        		'no_telp' => '251204',
        	],
        	[
        		'nama' => 'Karinah',
        		'alamat' => 'Koroya',
        		'no_telp' => '049982',
        	],
    	]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjams');
    }
}
