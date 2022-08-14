{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
        <div class="page-titles">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Categorias</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Todas</a></li>
          </ol>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header border-0 pb-0">
                <div>
                  <h4 class="fs-20 text-black">Gastos</h4>
                  <p class="mb-0 fs-13">Todos los gastos</p>
                </div>
                <a href="{{ route('gastos.crear') }}" class="btn btn-primary rounded-0 mt-3 mt-sm-0">Agregar Gasto</a>
              </div>
              <div class="card-body">
                <ul>
                  @foreach ($gastos as $item)
                      <li> {{ $item->monto }} </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
@endsection
