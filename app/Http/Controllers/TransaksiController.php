<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Peminjam;
use App\Models\Buku;

class TransaksiController extends Controller
{
    public function insert(Request $request){
    	$transaksi=new Transaksi();
    	$transaksi->id_peminjam=$request->post('id_peminjam');
    	$transaksi->id_buku=$request->post('id_buku');
    	$transaksi->tgl_pinjam=now();
    	$transaksi->tgl_kembali=NULL;
    	return $transaksi->save()?redirect(url('/'))->with('alert-success','Data berhasil ditambahkan'):redirect(url('/'))->with('alert-failed','Terjadi kesalahan');
    }
    
    public function read(){
    	$transaksi = Transaksi::join('bukus','transaksis.id_buku','bukus.id')->join('peminjams','peminjams.id','transaksis.id_peminjam')->select('transaksis.*','bukus.judul','peminjams.nama')->orderBy('transaksis.id')->get();
    	return view('index', ['transaksi' => $transaksi]);
    }
    
    public function read_sudah(){
    	$transaksi = Transaksi::join('bukus','transaksis.id_buku','bukus.id')->join('peminjams','peminjams.id','transaksis.id_peminjam')->select('transaksis.*','bukus.judul','peminjams.nama')->where('transaksis.tgl_kembali','!=',NULL)->orderBy('transaksis.id')->get();
    	return view('history', ['transaksi' => $transaksi]);
    }
    
    public function read_id(){
    	$buku = Buku::all();
    	$peminjam = Peminjam::all();
    	return view('insert', ['buku' => $buku],['peminjam' => $peminjam]);
    }
    
    public function read_belum()
    {
    	$transaksi = Transaksi::join('bukus','transaksis.id_buku','bukus.id')->join('peminjams','peminjams.id','transaksis.id_peminjam')->select('transaksis.*','bukus.judul','peminjams.nama')->where('transaksis.tgl_kembali',NULL)->orderBy('transaksis.id')->get();
    	return view('index', ['transaksi' => $transaksi]);
    }
    
    public function update(Request $request)
    {
    	$transaksi = Transaksi::findOrFail($request->get('id'));
    	$transaksi->tgl_kembali=now();
    	return $transaksi->save()?redirect(url('/'))->with('alert-success','Data berhasil diupdate'):redirect(url('/'))->with('alert-failed','Terjadi kesalahan');
    }
    
//    public function delete(Request $request){
//    	$barang = Barang::findOrFail($request->get('id'));
//    	return $barang->delete()?redirect(url('/'))->with('alert-success','Data berhasil dihapus'):redirect(url('/'))->with('alert-failed','Terjadi kesalahan');
//    }
}
