@extends('layouts.pengunjung')

@section('title', 'Pesan Makanan')

@section('style')
  <!-- <link rel="stylesheet" href="{{url('css/admin-dashboard.css')}}"> -->
@endsection

@section('content')
  <p class="h1 text-white mt-3 text-warning d-inline-block"> <i class="fas fa-clipboard-list  ml-2"></i> Pesanan Saya </p>
  <hr class="bg-warning mt-0">

  <div class="container-fluid">

	<div class="data-pesanan bg-mattBlackLight p-3 m-0">
		<p class="text-success display-4"> <i class="fas fa-user"></i> Meja Nomor {{session()->get('meja')}}  - Lantai  {{session()->get('lantai')}}</p>
		
		 <table class="table table-striped table-dark " id="tabel" style="border-bottom: 2px solid #2bffc6;">
      <thead>
        <tr class="bg-gradient-success">
          <th scope="col" style="width: 10%;">No</th>
          <th scope="col" style="width: 15%;"> Foto</th>
          <th scope="col" style="width: 35%;">Nama Makanan</th>
          <th scope="col" style="width: 15%;">Jumlah</th>
          <th scope="col" style="width: 15%;"> Harga</th>
          <th scope="col" style="width: 10%;"> Status</th>
        </tr>
      </thead>
      <tbody>
         <?php $tmp =0; ?>
        @if($pesanan->isEmpty())
              <tr>
                <td class="text-center" colspan="6">Kamu Belum memesan</td>
              </tr>
          @else
          @foreach($pesanan as $i => $item)
            <tr>
              <td style="text-align: center;">{{++$i}}</td>
              <td><img src="{{asset('img/'.$item->gambar)}}" alt="" class="img-fluid"></td>
              <td>{{$item->nama}}</td>
              <td>{{$item->jumlah}} porsi </td>
              <td>@currency($item->harga)</td>
              <td>Diproses</td>
            </tr> 
            <?php $tmp += ($item->harga * $item->jumlah) ?>
        @endforeach
  @endif
      </tbody>
    </table>
	<p class="text-success display-4 text-right"> <i class="fas fa-coins"></i> Total : @currency($tmp)</p>
	<p class="text-right"><a href="{{url('/selesai')}}" class="btn btn-success btn-lg"><i class="fas fa-check"></i> Selesai Memesan</a></p>
	</div>
  </div>

@endsection