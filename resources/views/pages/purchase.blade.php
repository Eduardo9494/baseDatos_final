@extends('layouts.app')
 
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body p-3">
            <h5>Historial de compras</h5>
            <hr>
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Producto</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Vendedor</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Fecha</th>
                </tr>
              </thead>

              </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection