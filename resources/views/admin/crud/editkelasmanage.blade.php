<?php $title = "Edit User Management";?>
@extends('layouts.admin')
@section('content')
<section id="main-content">
    <section class="wrapper">
  <div class="container">
    <div class="testbox">
        <form action="/admin/kelasmanage" method="POST" enctype="multipart/from-data">
            @method('PUT')
            @csrf
          <div class="banner">
            <h1>Tambah Kelas Management</h1>
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
            <label for="user_id">ID Kelas</label>
            <input class="form-control round-form" id="disabledInput" name="id" type="hidden" placeholder="{{ $kelas->id }}" value="{{ $kelas->id }}">
            <input class="form-control round-form" id="disabledInput" name="idisable" type="text" placeholder="{{ $kelas->id }}" value="{{ $kelas->id }}" disabled>
          </div>
          <div class="form-group">
            <label for="user_id">Nama Kelas</label>
            <input class="form-control round-form" id="disabledInput" name="nama_kelas" placeholder="{{ $kelas->nama_kelas }}"  value="{{ $kelas->nama_kelas }}" type="text">
          </div>
          <div class="form-group">
            <label for="user_id">Keterangan</label>
            <input class="form-control round-form" id="disabledInput" name="keterangan" type="text" placeholder="{{ $kelas->keterangan }}" value="{{ $kelas->keterangan}}">
          </div>
          <div class="form-group">
            <label for="dospem">Dosen Pembimbing</label>
            <select class="form-control" id="dospem" name="dosen_pembimbing">
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