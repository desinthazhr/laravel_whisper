<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>@yield('title', 'Whisper Cafe')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

  <!-- My Css -->
  <link rel="stylesheet" href="{{url('css/master.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  
  <!-- Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">
  <link href="{{url('fontawesome-free/css/all.min.css')}}" rel="stylesheet">

  <!-- Argon CSS -->
  <link type="text/css" href="{{url('assets/css/argon-design-system.min.css')}}" rel="stylesheet">

  @yield('style')
</head>

<body id="body">

  <!-- Navbar -->
  
<!-- End Navbar -->
<nav
      class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top"
    >
      <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="{{url('/')}}"><i class="fas fa-mug-hot mr-1"></i> WHISPER'S CAFE</a>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="fas fa-user"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="javascript:void(0)">
                            <!-- <img src="../../assets/img/brand/blue.png"> -->
                            <i class="fas fa-mug-hot"></i>   WHISPER'S CAFE
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        <ul class="navbar-nav ml-auto">
<!--             <li class="nav-item">
                    <a href="{{url('/')}}" class="d-inline-block h-100 p-3 text-white">HOME</a>
            </li> -->
             <li class="nav-item">
                    <a href="{{url('about')}}" class="btn btn-outline-warning mt-1">About</a>
            </li>
        </ul>
      </div>
    </nav>

<!-- Pengunjung Panel -->
    <div class="wrapper d-flex">
      <div class="sideMenu bg-mattBlackLight" style="width: 260px">
        <div class="sidebar">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a href="{{url('/pengunjung/pesanan')}}" class="nav-link px-2 text-warning pl-2">
                <i class="fas fa-clipboard-list fa-2x ml-2"></i>
                <span class="text">Pesanan Saya</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{url('/pengunjung/makanan')}}" class="nav-link px-2 text-warning ml-2">
                <i class="fas fa-hamburger fa-2x"></i>
                <span class="text">Pesan Makanan</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{url('/pengunjung/minuman')}}" class="nav-link px-2 text-warning ml-2">
                <i class="fas fa-coffee fa-2x"></i>
                <span class="text">Pesan Minuman</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="content">
        <main>

         @yield('content')
         
        </main>
      </div>
    </div>
<!-- End Admin Panel -->
  
<!-- Modal -->
  <div class="col-md-4">
          <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
              <div class="modal-content bg-gradient-success">
                <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-notification">Pemberitahuan</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="py-3 text-center">
                  <div class="py-3 text-center">
                    <i class="fas fa-check-circle fa-7x"></i>
                    <h1 class="h2 mt-4 font-weight-bold">
                       @if(session('status'))
                              {{session('status')}}
                        @endif  
                    </h1>
                  </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- End Modal -->

  <!-- Core -->
  <script src="{{url('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>

    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
    integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI="
    crossorigin="anonymous"
  ></script>

  <!-- Argon JS -->
  <script src="{{url('assets/js/argon-design-system.js')}}"></script>

  <!-- My Script -->
  <script src="{{url('js/script.js')}}"></script> 

    @if(session('status'))
    <script>
          $(document).ready(function(){
            $('#modal-notification').modal('show');
          });
    </script>
    @endif

  </body>
</html>