@extends('layouts.app')
 
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Producto</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-4">
            <div class="d-flex align-items-center justify-content-around">
            <p class="mb-0">Sort By</p>
            </div>
        </div>
        </div>
        <div class="row mt-4">

        @if($products->count() > 0)
            @foreach($products as $product)
            <div class="col-xl-3 col-sm- mb-4">
                <div class="card">
                <div class="card-header text-center">
                    <img src="{{ asset('assets/img') }}/{{ $product->image }}" style="height: 150px; width: 100%; object-fit: contain;">
                </div>
                <div class="card-body p-3">
                    <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                        <small class="d-flex align-items-center text-capitalize">
                            <i class="ri-store-2-fill me-1"></i> 
                            <span>kkkkkkkkkkkk</span>
                        </small>
                        <p class="mb-0 text-capitalize font-weight-bold">{{ $product->name }}</p>
                        <h5 class="font-weight-bolder mb-0">
                            ${{ number_format($product->price, 0, '.', '.') }}
                        </h5>
                        <small>{{ $product->description }}</small>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        @if(!$product->sold)
                        <a href="" class="btn bg-gradient-primary">Buy</a>
                        @else
                        <span class="btn bg-gradient-danger">Vendido</span>
                        @endif
                    </div>
                    </div>
                </div>
                </div>
            </div>
                </div>
            </div>
            @endforeach

            
        @else
            <div class="col-12">
            <div class="card">
                <div class="card-body text-center p-3">
                <h4>Product Not Available</h4>
                </div>
            </div>
            </div>
        @endif
        </div>
    </div>
    </section>
    <!-- /.content -->
@endsection