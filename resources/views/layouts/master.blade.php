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
  
  <!-- Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet">
  <link href="{{url('fontawesome-free/css/all.min.css')}}" rel="stylesheet">

  <!-- Argon CSS -->
  <link type="text/css" href="{{url('assets/css/argon-design-system.min.css')}}" rel="stylesheet">

@yield('style')
</head>

<body class="bg-gradient-default">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid ">
        <a class="navbar-brand text-white" href="{{url('/')}}"><i class="fas fa-mug-hot"></i>   WHISPER'S CAFE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="javascript:void(0)">
                            <!-- <img src="../../assets/img/brand/blue.png"> -->
                            <i class="fas fa-mug-hot"></i>   WHISPER'S CAFE
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <ul class="navbar-nav ml-lg-auto">
                    <!-- Authentication Links -->
                        @guest
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                <li class="nav-item">
                        <a href="{{url('about')}}" class="btn btn-outline-warning mt-1">About</a>
                </li>
            </ul>
        </div>
        </div>
</nav>
<!-- End Navbar -->

@yield('content');
  
<!-- Modal -->
  <div class="col-md-4">
<!--           <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button> -->
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
                    <i class="ni ni-bell-55 ni-5x"></i>
                    <h4 class="heading mt-4">BERHASIL!</h4>
                    <p>
                        @if(session('status'))
                              {{session('status')}}
                        @endif              
                    </p>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-white">Ok Matap</button>
                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- End Modal -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <!-- Core -->
  <script src="{{url('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{url('assets/js/core/bootstrap.min.js')}}"></script>

  <!-- Optional plugins -->
  <script src="{{url('assets/vendor/PLUGIN_FOLDER/PLUGIN_SCRIPT.js')}}"></script>

  <!-- Argon JS -->
  <script src="{{url('assets/js/argon-design-system.js')}}"></script>

  <!-- My Script -->
  <script src="{{url('assets/js/myscript.js')}}"></script>

    @if(session('status'))
    <script>
        
    </script>
    @endif

  </body>
</html>