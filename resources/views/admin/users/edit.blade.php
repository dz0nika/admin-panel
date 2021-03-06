@extends('layouts.admin')

@section('content')
<!-- Products List -->
            <div class="card">
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0 text-dark">Edit Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                          <a href=" {{ route('home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Users</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
                  <!-- /.content-header -->
              <section class="content">
                <div class="container-fluid">
                  <form method="post" action="{{url('/admin/users/' . $users->id)}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-3">Name</label>
                        <div class="col-md-6">
                          <input type="string" name="name" class="form-control" value="{{ $users->name }}"></div>
                        <div class="clearfix"></div>
                      </div>
                      <div class="row">
                        <label class="col-md-3">Email</label>
                        <div class="col-md-6">
                          <input type="string" name="email" class="form-control" value="{{ $users->email }}"></div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-info" value="Save">
                    </div>
                  </form>
              </div>
            </div>
          </section>
@endsection