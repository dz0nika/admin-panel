@extends('layouts.admin')

@section('content')
<div class="card">
                  <div class="card-header">
                    <h3 class="card-title">List of Users</h3>
                    <div class="card-tools">
                      <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                          <tr>
                            <th>{{$user['id']}}</th>
                            <th>{{$user['name']}}</th>
                            <th>{{$user['email']}}</th>
                            <th>{{$user['created_at']}}</th>
                            <th>{{$user['updated_at']}}</th>
                            <th href="#" class="btn btn-dark">CRUD</th>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
@endsection