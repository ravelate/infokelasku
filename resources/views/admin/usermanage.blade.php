<?php $title = "User Management";?>
@extends('layouts.admin')
@section('content')
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
          <h3><i class="fa fa-angle-right"></i> User Management</h3>
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
                      <th>Nama</th>
                      <th class="hidden-phone">Email</th>
                      <th class="hidden-phone">Integritas</th>
                      <th class="hidden-phone">Dibuat Pada</th>
                      <th class="hidden-phone">Actions</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $u)
                      @if ($u->role == '1')
                      <tr class="gradeX">
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td class="hidden-phone">{{ $u->email }}</td>
                        <td class="center hidden-phone">Admin</td>
                        <td class="center hidden-phone">{{ $u->created_at }}</td>
                        <td class="center hidden-phone">
                          <ul>
                          <li><a href="/admin/usermanage/{{ $u->id }}" class="btn btn-warning">Edit</a></li>
                          <li><li><form action="/admin/usermanage/{{ $u->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                          <input type="submit" class="btn btn-danger" value="Delete">
                          </form></li>
                        </ul>
                      </td>
                      </tr>
                      @else
                      <tr class="gradeA">
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td class="hidden-phone">{{ $u->email }}</td>
                        <td class="center hidden-phone">User</td>
                        <td class="center hidden-phone">{{ $u->created_at }} </td>
                        <td class="center hidden-phone">
                          <ul>
                            <li><a href="/admin/usermanage/{{ $u->id }}" class="btn btn-warning">Edit</a></li>
                            <li><form action="/admin/usermanage/{{ $u->id }}" method="POST">
                              @method('DELETE')
                              @csrf
                            <input type="submit" class="btn btn-danger" value="Delete">
                            </form></li>
                          </ul>
                        </td>
                      @endif
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
