<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-15">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @foreach ($materi as $m)
                <div class="solid" style="border:5px solid black;">
            <div class="container">
              <div class="testbox">
                  <form>
                    <div class="form-group">
                    <img src="{{$m->gambar}}" class="img-responsive center-block"> 
                    </div>
                    <div class="form-group">
                      <h3 class="text-center">{{$m->nama_materi}}</h3>
                    </div>
                    
                    <div class="form-group">
                      <p for="nama" class="text-center">Dibuat Oleh {{$m->dibuat_oleh}}</p>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <iframe width="1300" height="600"
                      src="{{$m->youtube}}">
                      </iframe>
                    </div>
                </div>
        </div>
                </div>
                <br><br><br><br>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .img-responsive{
    display: block;
    height: auto;
    max-width: 100%;
	  margin:0 auto;
}
.div.solid {border-style: solid;}
</style>

   <link href="{{ asset('userassets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
   <link href="{{ asset('userassets/vendor/aos/aos.css') }}" rel="stylesheet">
   <link href="{{ asset('userassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('userassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
   <link href="{{ asset('userassets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('userassets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ asset('userassets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
 
   <!-- Template Main CSS File -->
   <link href="{{ asset('userassets/css/style.css') }}" rel="stylesheet">

   <script src="{{ asset('userassets/vendor/aos/aos.js') }}"></script>
   <script src="{{ asset('userassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('userassets/vendor/php-email-form/validate.js') }}"></script>
   <script src="{{ asset('userassets/vendor/purecounter/purecounter.js') }}"></script>
   <script src="{{ asset('userassets/vendor/swiper/swiper-bundle.min.js') }}"></script>
 
   <!-- Template Main JS File -->
   <script src="{{ asset('userassets/js/main.js') }}"></script>