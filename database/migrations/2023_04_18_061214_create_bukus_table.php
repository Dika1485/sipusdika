<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('pengarang');
            $table->integer('isbn');
            $table->timestamps();
        });
        DB::table('bukus')->insert([
        	[
        		'judul' => 'Cara agar mahir CTF',
        		'pengarang' => 'Yizhuo',
        		'isbn' => 8931232,
        	],
        	[
        		'judul' => 'Robot Amarta, Karya Anak Teknik Unsoed',
        		'pengarang' => 'Yudhistira SRT',
        		'isbn' => 8783874,
        	],
        	[
        		'judul' => 'Tutorial Competitive Programming menggunakan C++',
        		'pengarang' => 'Zulkidin',
        		'isbn' => 8367273,
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
        Schema::dropIfExists('bukus');
    }
}
