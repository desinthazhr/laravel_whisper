@extends('layouts.admin')

@section('title', 'Admin - Dashboard')

@section('style')
  <link rel="stylesheet" href="{{url('css/admin-dashboard.css')}}">
@endsection


@section('content')
  <p class="h1 text-white mt-3 text-warning"> <i class="fas fa-chart-area  ml-2"></i> Dashboard</p>
  <hr class="bg-warning mt-0">
  <!-- Card -->
  <div class="row" id="baris">
    <div class="col-md-4 mb-4 " id="kolom">
        <div class="card bg-gradient-warning" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-hotdog"></i>
            </div>
            <h5 class="card-title text-white">JUMLAH MAKANAN</h5>
            <div class="display-2 text-white mb-1">{{$statistik[0]}} Menu</div>
            <a href="{{url('/makanan')}}"><p class="card-text text-white">Lihat Detil <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>
    </div>

        <div class="col-md-4 mb-4 " id="kolom">
          <div class="card bg-gradient-primary" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                  <i class="fas fa-cocktail"></i>
              </div>
              <h5 class="card-title text-white">JUMLAH MINUMAN</h5>
              <div class="display-2 text-white mb-1">{{$statistik[1]}} Menu</div>
              <a href="{{url('/minuman')}}"><p class="card-text text-white">Lihat Detil <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
      </div>

        <div class="col-md-4 mb-4 " id="kolom">
          <div class="card bg-gradient-success" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                  <i class="fas fa-clipboard-list"></i>
              </div>
              <h5 class="card-title text-white"> PESANAN SAAT INI</h5>
              <div class="display-2 text-white mb-1">{{$statistik[2]}} Buah</div>
              <a href="#pesanan_sekarang"><p class="card-text text-white">Lihat Detil <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
      </div>
  </div>
  <!-- End Card -->

<!-- Pesanan Saat ini -->

  <div class="container-fluid mt-4" id="pesanan_sekarang">
    <p class="h5 text-white mb-2 w-100 font-weight-bold"> <i class="fas fa-clipboard-list  ml-2"></i> PESANAN DI LANTAI 1</p>
    <div class="row bg-mattBlackLight pt-3">
      @foreach($lantai1 as $i => $meja)
        @if($meja)
            <div class="col-md-3 col-sm-6 mb-3">
              <a href="{{url('/pesanan/1/'.++$i)}}">
                  <div class="meja bg-success text-center p-3" style="color: white;">
                  <i class="fas fa-utensils fa-3x"></i>
                  <p class=" h4  text-center mb-0 mt-1" style="color: white; line-height: 1rem;">Meja {{$i}}</p>
                  <small class=" m-0"> Ada pesanan</small>
              </div>
              </a>
            </div>
        @else
          <div class="col-md-3 col-sm-6 mb-3">
                <div class="meja bg-dark text-center p-3" style="color: #6c757d">
                <i class="fas fa-utensils fa-3x"></i>
                <p class=" h4  text-center mb-0 mt-1" style="color: #6c757d; line-height: 1rem;">Meja {{++$i}}</p>
                <small class="text-muted m-0"> Tidak ada pesanan</small>
            </div>
          </div>
      @endif
  @endforeach

    </div>
  </div>

  <!-- Pesanan Di Lantai 2 -->

    <div class="container-fluid mt-4">
    <p class="h5 text-white mb-2 w-100 font-weight-bold"> <i class="fas fa-clipboard-list  ml-2"></i> PESANAN DI LANTAI 2</p>
    <div class="row bg-mattBlackLight pt-3">
      @foreach($lantai2 as $i => $meja)
        @if($meja)
            <div class="col-md-3 col-sm-6 mb-3">
              <a href="{{url('/pesanan/2/'.++$i)}}">
                  <div class="meja bg-primary text-center p-3" style="color: white;">
                  <i class="fas fa-utensils fa-3x"></i>
                  <p class=" h4  text-center mb-0 mt-1" style="color: white; line-height: 1rem;">Meja {{$i}}</p>
                  <small class=" m-0"> Ada pesanan</small>
              </div>
              </a>
            </div>
        @else
          <div class="col-md-3 col-sm-6 mb-3">
                <div class="meja bg-dark text-center p-3" style="color: #6c757d">
                <i class="fas fa-utensils fa-3x"></i>
                <p class=" h4  text-center mb-0 mt-1" style="color: #6c757d; line-height: 1rem;">Meja {{++$i}}</p>
                <small class="text-muted m-0"> Tidak ada pesanan</small>
            </div>
          </div>
      @endif
  @endforeach

    </div>
  </div>
  </div>
</div>
<!-- End Pesanan Saat ini  -->
@endsection