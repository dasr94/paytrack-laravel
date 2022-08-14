{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
        <div class="page-titles">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Bolsas</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Todas</a></li>
          </ol>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <div>
                  <h4 class="fs-20 text-black">Bolsas</h4>
                  <p class="mb-0 fs-13">Administración de bolsas</p>
                </div>
                <a href="{{ route('categorias.crear') }}" class="btn btn-primary rounded-0 mt-3 mt-sm-0">Agregar Bolsa</a>
              </div>
              <div class="card-body">
                <ul>
                  @foreach ($bolsas as $item)
                      <li> {{ $item->saldo }} - {{ $item->nombre }}  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
@endsection
