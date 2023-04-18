<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function read(){
    	$buku = Buku::all();
    	return view('buku', ['buku' => $buku]);
    }
    public function read_id(Request $request){
    	$buku = Buku::findOrFail($request->get('id'));
    	return view('buku_id', ['buku' => $buku]);
    }
}
