@extends('layouts.admin')

@section('title', 'Admin - Edit')

@section('style')
  <link rel="stylesheet" href="{{url('css/admin-dashboard.css')}}">
  <link rel="stylesheet" href="{{url('css/edit.css')}}">
@endsection

@section('content')
  <p class="h1 text-white mt-3 text-warning"> <i class="fas fa-edit  ml-2"></i> Edit {{$menu->nama}} </p>
  <hr class="bg-warning mt-0">

  <div class="container-fluid bg-mattBlackLight p-4">
  	<div class="row">
  		<div class="col-md-8">
			<form action="{{url('/menu/'.$menu->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				{{method_field('PATCH')}}
          		<input type="hidden" name="jenis" value="{{$menu->jenis}}" required>

				<div class="form-group mb-2">
					<p class="mb-1">Nama</p>
					<input type="text" class="form-control" name="nama" required value="{{$menu->nama}}">
				</div>
				<div class="form-group mb-2">
					<p class="mb-1">Harga /porsi</p>
					<input type="number	" class="form-control" name="harga" required value="{{$menu->harga}}">
				</div>
				<div class="form-group mb-4">
					<img src="{{asset('img/'.$menu->gambar)}}" alt="gambar menu" width="100px" class="img-fluid">
					<p class="mb-1">Foto Menu</p>
					<input type="file" class="form-control" name="gambar" placeholder="Gambar">
				</div>
				
	      	 	 <button type="submit" class="btn btn-primary">Update Perubahan</button>
				 <a href="{{url()->previous()}}" class="btn btn-danger">Batal</a>
		</form>
  		</div>
  	</div>
  </div>
@endsection