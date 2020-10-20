@extends('layouts.admin')

@section('content')
<!-- Products List -->
           <div class="card">
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0 text-dark">View Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                          <a href=" {{ route('home') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">View Products</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
                  <!-- /.content-header -->
              <section class="content">
                  <div class="card-body table-responsive p-3.4 h4">
  				         <label class="text-md-left">Name</label>
  				         <p class="text-md-left">{{ $products->name }}</p>
  				         <label class="text-md-left">Quantity</label>
  				         <p class="text-md-left">{{ $products->email }}</p>
  				         <label class="text-md-left">Created Record at</label>
  			           <p class="text-md-left">{{ $products->created_at }}</p>
                   <label class="text-md-left">Updated Record at</label>
                   <p class="text-md-left">{{ $products->updated_at }}</p>

                    <a href="{{url('/admin/products/' . $products->id . '/edit')}}" class="btn btn-info">Edit</a>

                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                    <form action="{{ route('products.destroy', $products->id) }}" method="post">
                              @method('DELETE')
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     </form>
                  </div>
                  <!-- /.card-body -->
                </div>
@endsection