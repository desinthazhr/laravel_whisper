@extends('layouts.first')

@section('title', 'Daftar - Whisper')

@section('style')
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
    <div id="app">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid logo">
                    <div class="col-md-6">
                        <!-- Login Card -->
                        <div class="card">
                            <div class="card-body" id="card">
                                <form method="POST" action="{{url('/pengunjung')}}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                        <div class="col-md-6">
                                            <input id="nama" type="text" class="form-control" name="nama" required  autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="meja" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Meja') }}</label>

                                        <div class="col-md-6">
                                            <input id="meja" type="number" class="form-control" name="meja" required  min="1" max="12" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lantai" class="col-md-4 col-form-label text-md-right">{{ __('Lantai') }}</label>

                                        <div class="col-md-6">
                                            <input id="lantai" type="number" class="form-control" name="lantai" required  autofocus min="1" max="2">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-warning">
                                                {{ __('Oke Lanjut') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Login Card -->

                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
