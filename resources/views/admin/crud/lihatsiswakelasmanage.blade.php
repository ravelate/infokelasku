<?php $title = "Lihat siswa Management";?>
@extends('layouts.admin')
@section('content')
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <?php $i=1; ?>
            @foreach ($kelas as $k)
          <h3><i class="fa fa-angle-right"></i> List Siswa {{ $k->nama_kelas }}</h3>
          <div class="row mb">
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
            <!-- page start-->
            <div class="content-panel">
              <div class="adv-table">
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($k->users as $u)
                      <tr class="gradeA">
                        <td>{{ $i }}</td>
                        <td>{{ $u->name }}</td>
                      </tr>
                      <?php $i++; ?>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- page end-->
          </div>
          <!-- /row -->
          @endforeach
        </section>
        <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
      <!--main content end-->
@endsection
