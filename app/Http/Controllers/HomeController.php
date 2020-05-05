<?php

namespace App\Http\Controllers;
use App\Pesanan;
use App\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $meja1 = Pesanan::select('meja')
                                   ->where('lantai',1)->where('selesai',0)
                                    ->distinct()->get();
        $lantai1 = array_fill(0, 12, false);

        foreach($meja1 as $i=>$meja){
            $lantai1[--$meja->meja] = true;
        }

        $meja2 = Pesanan::select('meja')
                                   ->where('lantai',2)->where('selesai',0)
                                    ->distinct()->get();
        $lantai2 = array_fill(0, 12, false);

        foreach($meja2 as $i=>$meja){
            $lantai2[--$meja->meja] = true;
        }

        $statistik = [Menu::where('jenis', 'makanan')->count(), Menu::where('jenis', 'minuman')->count(), Pesanan::where('selesai', '0')->count()];

        return view('home', compact('lantai1', 'lantai2', 'statistik'));
    }
}
