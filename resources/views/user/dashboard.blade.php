<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-15">
            @if (session('success'))
        <div class="col-sm-12">
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
        </div>
        @endif
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container" data-aos="fade-up">
        <div class="row">
                @foreach ($kelas as $langganan)
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="card">
                    <div class="card-img">
                      <img src="userassets/img/events-1.jpg" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title text-center"><a href="">{{$langganan->nama_kelas}}</a></h5>
                      <p class="fst-italic text-center">Dosen Pembimbing: {{$langganan->dosen_pembimbing}}</p>
                      <p class="card-text text-center">{{$langganan->keterangan}}</p>
                      <div class="col text-center">
                        <?php $check=0 ?>
                        @foreach ($langganan->users as $p)
                        @if ($iduser == $p->pivot->user_id && $langganan->id == $p->pivot->kelas_id)
                      <?php $check++ ?>  
                          <a href="/kelas/{{ $langganan->id }}" class="btn btn-success">MASUK</a>
                                     
                        @endif
                        @endforeach
                        @if($check == 0)
                        <div id="beli{{$langganan->nama_kelas}}">
                        <form action="" method="POST" enctype="multipart/from-data">
                          @csrf
                         <input type="hidden" name="user_id" value="{{$iduser}}">
                         <input type="hidden" name="id" value="{{$langganan->id}}">
                          <input type="submit" class="btn btn-success" value="BERGABUNG">
                         </form>
                        </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


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