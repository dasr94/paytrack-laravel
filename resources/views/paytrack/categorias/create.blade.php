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
              <div class="card-header">
                  <h4 class="card-title">Agregar Categoria</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                      <form method="POST" action="{{ route('categorias.save') }}">
                        @csrf
                          <div class="form-group row">
                              <label class="col-12 col-md-3 col-form-label">Nombre</label>
                              <div class="col-12 col-md-9">
                                  <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-12 col-md-3 col-form-label">Descripción</label>
                              <div class="col-12 col-md-9">
                                  <input type="text" class="form-control" placeholder="descripcion" name="descripcion">
                              </div>
                          </div>
              
                          <div class="form-group row">
                              <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Agregar</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          </div>
        </div>
        
      </div>
@endsection
