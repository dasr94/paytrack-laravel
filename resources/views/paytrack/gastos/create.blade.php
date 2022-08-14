{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
        <div class="page-titles">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Gastos</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Agregar</a></li>
          </ol>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Agregar Gasto</h4>
              </div>
              <div class="card-body">
                  <div class="basic-form">
                      <form method="POST" action="{{ route('gastos.save') }}">
                        @csrf
                          
                          <div class="form-group row">
                              <label class="col-12 col-md-3 col-form-label">Descripción</label>
                              <div class="col-12 col-md-9">
                                  <input type="text" class="form-control" placeholder="descripcion" name="descripcion">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-12 col-md-3 col-form-label">Monto</label>
                            <div class="col-12 col-md-9">
                              <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" placeholder="monto" name="monto" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-12 col-md-3 col-form-label">Bolsa</label>
                            <div class="col-12 col-md-9">
                              <select class="form-control" name="bolsa_id">
                                @foreach ($bolsas as $item)
                                  <option value="{{ $item->id }}">{{ $item->nombre }}</option>                                    
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-12 col-md-3 col-form-label">Categoria</label>
                            <div class="col-12 col-md-9">
                              <select class="form-control" name="categoria_id">
                                @foreach ($categorias as $item)
                                  <option value="{{ $item->id }}">{{ $item->nombre }}</option>                                    
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-12 col-md-3 col-form-label">Tipo</label>
                            <div class="col-12 col-md-9">
                              <select class="form-control" name="tipo">
                                <option value="1">Gasto</option>                                    
                                <option value="2">Ingreso</option>                                    
                              </select>
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
