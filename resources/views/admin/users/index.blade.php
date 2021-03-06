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

                            <th>
                              <a href="{{url('/admin/users/' . $user['id'] . '/') }}" class="btn btn-info">Details</a>
                            </th>

                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="card-tools">
                      <div class="pagination justify-content-center p-2">
                          {!! $users->links() !!}
                      </div>
                    </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
@endsection