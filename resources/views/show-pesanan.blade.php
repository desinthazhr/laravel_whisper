@extends('layouts.admin')

@section('title', 'Admin - Makanan')

@section('style')
  <link rel="stylesheet" href="{{url('css/admin-dashboard.css')}}">
@endsection

@section('content')

  <p class="h1 text-white mt-3 text-warning"> <i class="fas fa-hamburger  ml-2"></i> Pesanan Meja {{$data[1]}} Lantai {{$data[0]}}
  </p>
  <hr class="bg-warning mt-0">
  
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
      </tbody>
    </table>
  <p class="text-success display-4 text-right"> <i class="fas fa-coins"></i> Total : @currency($tmp)</p>
  <form action="{{url('/pesanan/'.$data[0].'/'.$data[1])}}" method="POST">
    @csrf
    {{method_field("PATCH")}}
    <button class="btn btn-success btn-lg float-right" type="submit"><i class="fas fa-check"></i> Tandai Sebagai Pesanan Selesai</button>
  </form>
@endsection

<!-- Modal Tambah Data-->

<!-- End Modal -->
