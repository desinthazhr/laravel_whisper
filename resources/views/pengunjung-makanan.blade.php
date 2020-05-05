@extends('layouts.pengunjung')

@section('title', 'Pesan Makanan')

@section('style')
  <link rel="stylesheet" href="{{asset('css/produk.css')}}">
@endsection

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-gradient-warning">
        <h5 class="modal-title text-white h3" id="exampleModalLabel"><i class="fas fa-hamburger"></i> Detil Makanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col mb-3">
        <form action="{{url('/pesanan')}}" method="POST">
            <table>
              <th rowspan="5" style="width: 40%; padding-right: 20px; padding-bottom: 20px;">
                 <img src="{{asset('img/logo.png')}}" alt="menu" width="200px" height="200px" style="object-fit: cover;" class="img-fluid data-gambar">
              </th>
                <th style="width: 20%">Nama</th>
                <td class="data-nama">Hamburger</td>
              <tr>
                <th>Harga</th>
                <td class="data-harga"> Rp 2000/porsi</td>
              </tr><tr>
                <th>Meja</th>
                <td class="data-meja">5</td>
              </tr>
              <tr>
                <th>Lantai</th>
                <td class="data-lantai">5</td>
              </tr>
              </tr><tr>
                <th>Jumlah</th>
                <td>
                   <div class="form-group">
                      <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Porsi" required min="1">
                    </div>
                </td>
              </tr>
            </table>
              @csrf
              <input class="pesan-id"  type="hidden" name="menus_id">
              <input class="pesan-pelanggan"  type="hidden" name="pelanggan"  value="{{session()->get('nama')}}">
              <input class="pesan-nama"  type="hidden" name="nama">
              <input class="pesan-gambar"  type="hidden" name="gambar">
              <input class="pesan-harga"  type="hidden" name="harga">
              <input class="pesan-meja"  type="hidden" name="meja">
              <input class="pesan-lantai"  type="hidden" name="lantai">
              <button  type="submit"class="w-100 btn btn-warning"><i class="fas fa-paper-plane"></i> Pesan</button>
                  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <p class="h1 text-white mt-3 text-warning d-inline-block"> <i class="fas fa-hotdog  ml-2"></i> Pesan Makanan </p>
  <hr class="bg-warning mt-0">

    <div class="container-fluid">
  	<div class="row">
      
      @foreach($makanan as $item)
  		<div class="col-md col-sm-6 mb-3 shadow mr-3" id="produk">
  			<img src="{{asset('img/'.$item->gambar)}}" class="rounded-circle ">
  			<p class="nama text-warning">{{$item->nama}}</p>
  			<p class="harga">@currency($item->harga)</p>
		     <a 	class="w-100 btn btn-outline-warning mb-2 btn-pesan" 
          data-id="{{$item->id}}"
          data-nama="{{$item->nama}}"
          data-harga="{{$item->harga}}"
          data-data_harga="@currency($item->harga)"
          data-meja="{{session()->get('meja')}}"
          data-lantai="{{session()->get('lantai')}}"
          data-gambar="{{$item->gambar}}"
          data-toggle="modal" data-target="#exampleModal"
          >Pesan</a>
  		</div>
      @endforeach

  	</div>  	
  </div>

@endsection