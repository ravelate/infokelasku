<?php $title = "Tambah Materi Management";?>
@extends('layouts.admin')
@section('content')
<section id="main-content">
    <section class="wrapper">
  <div class="container">
    <div class="testbox">
        <form action="/admin/materimanage" method="POST" enctype="multipart/from-data">
            @csrf
          <div class="banner">
            <h1>Tambah Materi Management</h1>
          </div>
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div><br />
    @endif
          <br>
          <div class="form-group">
            <label for="dospem">Nama Kelas</label>
            <select class="form-control" id="dospem" name="kelas_id">
                @foreach ($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                @endforeach
                
            </select>
          </div>
          <div class="form-group">
            <label for="user_id">Nama Materi</label>
            <input class="form-control round-form" id="disabledInput" name="nama_materi" type="text">
          </div>
          <div class="form-group">
            <label for="user_id">Link Gambar</label>
            <input class="form-control round-form" id="disabledInput" name="gambar" type="text">
          </div>
          <div class="form-group">
            <label for="user_id">Link Youtube</label>
            <input class="form-control round-form" id="disabledInput" name="youtube" type="text">
          </div>
          <div class="form-group">
            <label for="dospem">Dosen Pembuat</label>
            <select class="form-control" id="dospem" name="dibuat_oleh">
                @foreach ($user as $u)
                <option value="{{ $u->name }}">{{ $u->name }}</option>
                @endforeach
                
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Tambah">
          </div>
        </form>
        
      </div>
  </div>
 
</section>
</section>
@endsection