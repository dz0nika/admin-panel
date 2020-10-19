@extends('layouts.admin')

@section('content')
<!-- Products List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Products List
                </h3>

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
              <!-- /.card-header -->  
              <!-- /.card-body -->
              <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
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
                            <th href="#" class="btn btn-dark">CRUD</th>
                          </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> Add item</button>
              </div>
            </div>
@endsection