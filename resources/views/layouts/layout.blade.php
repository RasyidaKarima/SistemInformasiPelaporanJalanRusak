<!doctype html>
<html lang="en">
<style>
.img-fluid {
  max-width: 100%;
  height: auto;
}
.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
</style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{url('assets/landing-page/css/style.css')}}">
    @yield('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <link href="/{{url('assets/fontawesome/css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <link href="{{url('assets/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{url('assets/fontawesome/css/brands.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/arsitek/Pe-icon-7-stroke.css')}}">
    <link href="{{url('assets/fontawesome/css/solid.css')}}" rel="stylesheet">
  </head>
  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
        @if($aplikasi=='')
        Aspirasi Ku
        @else
        {{$aplikasi->nama_aplikasi}}
        @endif
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="/index">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/lapor">Lapor</a>
            <a class="nav-item nav-link" href="/data_laporan">Data Laporan</a>
            <a class="nav-item nav-link" href="/profil">Profil</a>
            <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i> &nbsp;{{ __('Logout') }}
            </a>
            
            <a class="nav-item nav-link-ya">
            @if(Auth::user()->foto_profil == '0')
            <img src="{{url('/assets/img/avatar.png')}}" class="img-fluid"  width="42" hight="1410">
            @else
            <img src="{{url('/database/foto_profil/'. Auth::user()->foto_profil)}}" class="img-fluid mt-2"  width="42" hight="1410">
            @endif
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    
    @yield('content')

    @include('sweetalert::alert')
    
 
<script type="text/javascript" src="{{url('assets/arsitek/scripts/main.js')}}"></script></body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stack('scripts')
  </body>
</html>