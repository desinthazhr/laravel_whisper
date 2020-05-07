@extends('layouts.admin')

@section('title', 'Admin - Minuman')

@section('style')
  <link rel="stylesheet" href="{{url('css/admin-dashboard.css')}}">
@endsection


@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-gradient-success">
        <h5 class="modal-title text-white h3" id="exampleModalLabel"><i class="fas fa-plus"></i> Tambah Menu Minuman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{url('/menu')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="jenis" value="minuman" required>
          <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Nama Menu" required>
          </div>
          <div class="form-group">
            <input type="number " class="form-control" name="harga" placeholder="Harga /porsi" required>
          </div>
          <div class="form-group">
            <small>Gambar Menu</small>
            <input type="file" class="form-control" name="gambar" placeholder="Gambar" required>
          </div>
               <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-primary">Tambahkan Data</button>
      </form>
      </div>
    </div>
  </div>
</div>


  <p class="h1 text-white mt-3 text-warning d-inline-block"> <i class="fas fa-coffee  ml-2"></i> Daftar Minuman 
    <a href="" class="btn btn-warning btn-icon-only rounded-circle mb-1" data-toggle="modal" data-target="#exampleModal">
      <span class="btn-inner--icon text-white"><i class="fas fa-plus"></i></span>
    </a>
  </p>
  <hr class="bg-warning mt-0">
  
<div class="row mt-4 shadow">

  <div class="col-md">
      <table class="table table-striped table-dark " id="tabel">
      <thead>
        <tr class="bg-gradient-success">
          <th scope="col" style="width: 10%;">No</th>
          <th scope="col" style="width: 20%;"> Foto</th>
          <th scope="col" style="width: 35%;">Nama Makanan</th>
          <th scope="col" style="width: 20%;"> Harga</th>
          <th scope="col" style="width: 15%;">Aksi</th>
        </tr>
      </thead>
      <tbody>
       @foreach($minuman as $i => $item)
        <tr>
          <td style="text-align: center;">{{++$i}}</td>
          <td><img src="{{asset('img/'.$item->gambar)}}" alt="minuman" class="img-fluid"></td>
          <td>{{$item->nama}}</td>
          <td>@currency($item->harga)</td>
          <td>
            <a href="{{url('/menu/'.$item->id.'/edit')}}" class="btn btn-primary btn-sm px-3 py-2 mb-2"><i class="fas fa-edit"></i> </a>

            <form action="{{url('menu/'.$item->id)}}" method="POST">
                  @csrf
                  {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger btn-sm px-3 py-2" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fas fa-trash"></i> </a>
            </form>
          </td>
        </tr> 
        @endforeach
      </tbody>
    </table>
    <div class="row w-100 justify-content-center">
      {{$minuman->links()}}
    </div>
  </div>
</div>
<!-- End Pesanan Saat ini  -->
@endsection