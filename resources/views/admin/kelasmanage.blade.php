<?php $title = "Kelas Management";?>
@extends('layouts.admin')
@section('content')
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> Kelas Management <a href="/admin/kelasmanage/tambah" class="btn btn-success pull-right">Tambah</a></h3>
          
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
                      <th class="hidden-phone">Dosen Pembimbing</th>
                      <th class="hidden-phone">Keterangan</th>
                      <th class="hidden-phone">jumlah Siswa</th>
                      <th class="hidden-phone">Dibuat Pada</th>
                      <th class="hidden-phone">Actions</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kelas as $k)
                      <tr class="gradeA">
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama_kelas }}</td>
                        <td class="hidden-phone">{{ $k->dosen_pembimbing }}</td>
                        <td class="hidden-phone">{{ $k->keterangan }}</td>
                        <td class="center hidden-phone">{{ $k->users->count() }}</td>
                        <td class="center hidden-phone">{{ $k->created_at }} </td>
                        <td class="center hidden-phone">
                         <a href="/admin/kelasmanage/siswa/{{ $k->id }}" class="btn btn-success">Daftar Siswa</a>
                           <a href="/admin/kelasmanage/{{ $k->id }}" class="btn btn-warning">Edit</a>
                            <form action="/admin/kelasmanage/{{ $k->id }}" method="POST">
                              @method('DELETE')
                              @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                         
                        </td>
                     
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
