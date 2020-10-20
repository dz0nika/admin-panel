@extends('layouts.admin')

@section('content')
                <div class="card">
                  <div class="card-header">
                    <h1 class="card-title">List of Products</h1>               
                        <a href="{{ route('products.create') }}" class="btn btn-primary float-right">Add New Product Manually</a>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-borded table-striped p-2">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Product Name</th>
                          <th>Product Quantity</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                          <tr>
                            <th>{{$product['id']}}</th>
                            <th>{{$product['name']}}</th>
                            <th>{{$product['quantity']}}</th>
                            <th>{{$product['created_at']}}</th>
                            <th>{{$product['updated_at']}}</th>

                            <th>
                              <a href="{{url('/admin/products/' . $product['id'] . '/') }}" class="btn btn-info">Details</a>
                            </th>

                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div class="card-tools">
                      <div class="pagination justify-content-center p-2">
                          {!! $products->links() !!}
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
@endsection