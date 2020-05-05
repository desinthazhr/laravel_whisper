<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;

class PageController extends Controller
{
    public function pengunjung(){
    	return view('pengunjung');
    }
    public function about(){
        return view('about');
    }

     public function inisiasi(Request $request){
     	$request->session()->put([
     		'meja' => $request->meja,
     		'lantai' => $request->lantai,
     		'nama'=>$request->nama
     	]);
        $pesanan = Pesanan::select('gambar','nama', 'jumlah', 'harga')
                                ->where('meja', $request->session()->get('meja'))
                                ->where('lantai', $request->session()->get('lantai'))
                                ->where('selesai', 0)->get();

    	return view('pengunjung-pesanan', compact('pesanan'));
    }

    public function selesai(Request $request){
        $request->session()->forget('nama');
        $request->session()->forget('meja');
        $request->session()->forget('labtai');
        return redirect('/');
    }
}
