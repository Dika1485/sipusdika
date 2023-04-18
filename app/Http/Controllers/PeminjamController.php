<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;

class PeminjamController extends Controller
{
    public function read(){
    	$peminjam = Peminjam::all();
    	return view('peminjam', ['peminjam' => $peminjam]);
    }
    public function read_id(Request $request){
    	$peminjam = Peminjam::findOrFail($request->get('id'));
    	return view('peminjam_id', ['peminjam' => $peminjam]);
    }
}
