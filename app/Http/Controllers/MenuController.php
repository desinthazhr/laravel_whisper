<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $folder_tujuan = 'img';
        $file->move($folder_tujuan, $nama_file);

        Menu::create([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'gambar' => $nama_file
        ]);

        return redirect('/'.$request->jenis)->with('status', 'Data '.$request->nama.' berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(menu $menu)
    {
        return view('edit-menu', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menu $menu)
    {
         $nama_file = $menu->gambar;
        if($request->hasFile('gambar')){
            $nama_file = time()."_".$request->file('gambar')->getClientOriginalName();
            $folder_tujuan = 'img';
            $request->file('gambar')->move($folder_tujuan, $nama_file);
            $image_path = "img/".$menu->gambar;
            if(File::exists($image_path))
                File::delete($image_path);
            }

            Menu::where('id', $menu->id)
            ->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'gambar' => $nama_file
            ]);

             return redirect('/'.$request->jenis)-> with('status','Data '.$request->nama.' berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        $image_path = "img/".$menu->gambar;
        if(File::exists($image_path))
            File::delete($image_path);

        Menu::destroy($menu->id);
        return redirect('/'.$menu->jenis) -> with('status','Data'.$menu->nama.' berhasil dihapus');
    }

     public function makanan(){
        $makanan  = Menu::orderBy('id', 'desc')->where('jenis', 'makanan')->paginate(10);
        return view('admin-makanan', compact('makanan'));
    }     

    public function minuman(){
        $minuman  = Menu::orderBy('id', 'desc')->where('jenis', 'minuman')->paginate(10);
        return view('admin-minuman', compact('minuman'));
    }
}
