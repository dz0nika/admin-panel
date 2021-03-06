@extends('layouts.admin')

@section('content')

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Add New User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                	<a href=" {{ route('home') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add Users</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
          <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">
          <form method="post" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group">
              <div class="row">
                <label class="col-md-3">Name</label>
                <div class="col-md-6">
                	<input type="string" name="name" class="form-control"></div>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                <label class="col-md-3">Email</label>
                <div class="col-md-6">
                	<input type="string" name="email" class="form-control"></div>
                <div class="clearfix"></div>
              </div>
              <div class="row">
                <label class="col-md-3">Password</label>
                <div class="col-md-6">
                  <input type="password" name="password" class="form-control" id=myInput>
                  <input type="checkbox" onclick="myFunction()">Show Password
                  </div>
                  <script>
                      function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                          x.type = "text";
                        } else {
                          x.type = "password";
                        }
                      }
                  </script>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-info" value="Save">
            </div>
          </form>
        </div>
      </section>  


@endsection