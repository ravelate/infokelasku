<?php $title = "Edit User Management";?>
@extends('layouts.admin')
@section('content')
<section id="main-content">
    <section class="wrapper">
  <div class="container">
    <div class="testbox">
        <form action="/admin/usermanage" method="POST" enctype="multipart/from-data">
            @method('PUT')
            @csrf
          <div class="banner">
            <h1>EDIT USER PROFILE</h1>
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
            <label for="user_id">ID Pengguna</label>
            <input class="form-control round-form" id="disabledInput" name="id" type="hidden" placeholder="{{ $user->id }}" value="{{ $user->id }}">
            <input class="form-control round-form" id="disabledInput" name="idisable" type="text" placeholder="{{ $user->id }}" value="{{ $user->id }}" disabled>
          </div>
          <div class="form-group">
            <label for="user_id">Nama</label>
            <input class="form-control round-form" id="disabledInput" name="name" type="text" placeholder="{{ $user->name }}" value="{{ $user->name }}">
          </div>
          <div class="form-group">
            <label for="user_id">Email</label>
            <input class="form-control round-form" id="disabledInput" name="email" type="text" placeholder="{{ $user->email }}" value="{{ $user->email}}">
          </div>
          <div class="from-group">
            <label class="control-label" for="role">Integritas: </label>
             <select class="form-control" name="role">
                <option value="1">Admin</option>
                <option value="0">Pelajar</option>  
             </select>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Edit">
          </div>
        </form>
        
      </div>
  </div>
 
</section>
</section>
@endsection