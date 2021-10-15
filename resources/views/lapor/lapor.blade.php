@extends('layouts.layout')
@section('content')
<title>Lapor | Layanan Pengaduan Masyarat</title>

<body>
<style>

#idfoto_pengaduan{
   background-image:url('');
   background-size:cover;
   background-position: center;
   height: 250px; width: 250px;
   border: 1px solid #bbb;
}
.jumbotron{
  position: relative;
}
</style>

 
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Form Pengaduan  </h1>
    <a href="javascript::void(0)" class="btn btn-primary lapor">Sampaikan pengaduan melalui form dibawah</a>
  </div>
</div>
<!-- akhir Jumbotron -->

  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

 <br><br>
  <main id="main">

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Form Pengaduan</h2>
          </div>

        </div>

        <div class="row">

        
        <div class="col-md-6 ml-auto order-2" data-aos="fade-left">
            <img src="{{url('assets/fitur/assets/img/undraw_svg_2.svg')}}" alt="Image" class="img-fluid">
        </div>

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="/lapor_store" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                
                <div class="col-md-12 form-group">
                  <label for="isi_laporan`">Isi Laporan :</label>
                  <textarea class="form-control" name="isi_laporan" cols="30" rows="10">{{ old('isi_laporan') }}</textarea>
                  <div class="validate"></div>
                </div>


                <div class="col-md-12 form-group">
                  <label for="foto_pengaduan">Foto Pengaduan :</label>
                  <input type="file" class="form-control" name="foto_pengaduan" id="foto_pengaduan" required />
                  <!-- <div id='idfoto_pengaduan'></div> -->
                  <div class="validate"></div>
                </div>
                @error('foto_pengaduan')
                <div class="col-sm-12">
                      <div class="col-sm-12">
                          <div class="alert bg-danger">
                              <strong class="text-white">{{ $message }}</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                </div>
                @enderror   

                <div class="col-md-12 form-group">
                  <label for="kategori">Kategori : <br>
                  <input type="radio" name="kategori" id="pengajuan" value="pengajuan" @if(old('kategori') == 'pengajuan') checked @else  @endif required/>
                  <label for="pengajuan">Pengajuan 
                  <input type="radio" name="kategori" id="aspirasi" value="aspirasi" @if(old('kategori') == 'aspirasi') checked @else @endif required/> 
                  <label for="aspirasi">Aspirasi <br>
                  </label>
                  <div class="validate"></div>
                </div>
                
                <div class="col-md-12 form-group">
                  <input type="submit" class="btn btn-primary btn-block" value="Kirim">
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>
</body>

</html>
@endsection

@push('scripts')
<script>

document.getElementById('pengaduan').addEventListener('change', readURL, true);
function readURL(){
   var file = document.getElementById("pengaduan").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('idpengaduan').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
</script>
</script>
@endpush