<?php

namespace App\Http\Controllers;

use App\Pesanan;
use App\Menu;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->session()->has('nama')){
            $request->meja = (int) $request->meja;
            $request->lantai = (int) $request->lantai;
            $request->harga = (int) $request->harga;

            Pesanan::create($request->all());
            return redirect('pengunjung/pesanan')->with('status', 'Order '.$request->nama.' Berhasil');
        }
        return redirect('/pengunjung');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show($lantai, $meja)
    {
        $pesanan = Pesanan::where('lantai', $lantai)->where('meja', $meja)->get();
        $data = [$lantai, $meja];

        return view('show-pesanan', compact('pesanan', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update($lantai, $meja)
    {
        Pesanan::where('lantai', $lantai)->where('meja', $meja)->where('selesai',0)->update([
            'selesai'=>1
        ]);

        return redirect('/home')->with('status','Pesanan Meja '.$meja." Lantai ".$lantai." SELESAI");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pesanan  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesanan $pesanan)
    {
        //
    }

    public function pesanan(Request $request){
       if($request->session()->has('nama')){
            $pesanan = Pesanan::select('gambar','nama', 'jumlah', 'harga')
                                            ->where('meja', $request->session()->get('meja'))
                                            ->where('lantai', $request->session()->get('lantai'))
                                            ->where('selesai', 0)->get();
            return view('pengunjung-pesanan', compact('pesanan'));
        }

        return redirect('/pengunjung');
    }

    public function makanan(Request $request){
        if($request->session()->has('nama')){
            $makanan  = Menu::orderBy('nama', 'asc')->where('jenis', 'makanan')->paginate(10);
             return view('pengunjung-makanan', compact('makanan'));
        }

        return redirect('/pengunjung');
    }

    public function minuman(Request $request){
        if($request->session()->has('nama')){
             $minuman  = Menu::orderBy('nama', 'asc')->where('jenis', 'minuman')->paginate(10);
             return view('pengunjung-minuman', compact('minuman'));
        }
        return redirect('/pengunjung');
    }
}
