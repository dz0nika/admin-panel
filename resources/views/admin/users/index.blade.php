@extends('layouts.admin')

@section('content')
<div class="card">
                  <div class="card-header">
                    <h1 class="card-title">List of Users</h1>               
                        <a href="{{ route('users.create') }}" class="btn btn-primary float-right">Add New User Manually</a>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-borded table-striped p-2">
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

                            <th href="{{ route('users.edit', $user['id']) }}" class="btn btn-info">Edit</th>

                            <th href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</th>
                              <form action="{{ route('users.destroy', $user['id']) }}" method="post">
                                @method('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              </form>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="card-tools">
                        <ul class="pagination pagination-sm">
                          <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                          <li class="page-item"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item"><a href="#" class="page-link">3</a></li>
                          <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
@endsection