@extends('layouts.first')

@section('title', 'Beranda - Whisper')

@section('content')
  <div class="container landing">
   <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid logo">
  <p class="lead mb-0 mt-2">SELAMAT DATANG DI</p>
  <p class="nama">WHISPER'S CAFE</p>
  <hr class="my-4">
  <p>Cafe milenials, Menjual berbagai jenis makanan dan minuman</p>
  <p class="lead">
    <a class="btn btn-warning btn-lg" href="{{ route('login') }}" role="button"><i class="fas fa-user-cog mr-2"></i>ADMIN</a>
    <a class="btn btn-warning btn-lg" href="{{ url('/pengunjung') }}" role="button"><i class="fas fa-utensils mr-2"></i>PENGUNJUNG</a>
  </p>
</div>
@endsection