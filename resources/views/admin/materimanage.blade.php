<?php $title = "Materi Management";?>
@extends('layouts.admin')
@section('content')
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Materi Management <a href="/admin/materimanage/tambah" class="btn btn-success pull-right">Tambah</a></h3>
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
                      <th>ID</th>
                      <th>Nama Kelas</th>
                      <th class="hidden-phone">Materi</th>
                      <th class="hidden-phone">gambar</th>
                      <th class="hidden-phone">dibuat oleh</th>
                      <th class="hidden-phone">dibuat pada</th>
                      <th class="hidden-phone">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($dataMateri as $d)
                    <tr class="gradeA">
                     <td class="hidden-phone">{{$d->id}}</td>
                     @foreach ($dataKelas as $p)
                         @if ($p->id == $d->kelas_id)
                         <td class="hidden-phone">{{$p->nama_kelas}}</td>
                         @endif
                     @endforeach
                     <td class="hidden-phone">{{$d->nama_materi}}</td>
                     <td class="hidden-phone"><img src="{{ $d->gambar }}" width="200"></td>
                     <td class="hidden-phone">{{$d->dibuat_oleh}}</td>
                     <td class="hidden-phone">{{$d->created_at}}</td>
                     <td class="hidden-phone"> <a href="/admin/materimanage/{{ $d->id }}" class="btn btn-warning">Edit</a>
                      <form action="/admin/materimanage/{{ $d->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                      <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                    </td>
                    </tr>
                    @endforeach                    
                  </tbody>
                </table>
              </div>
            </div>
            <!-- page end-->
          </div>
          <!-- /row -->
        </section>
        <!-- /wrapper -->
      </section>
      <!-- /MAIN CONTENT -->
      <!--main content end-->
@endsection
