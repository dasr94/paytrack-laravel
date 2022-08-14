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
          @foreach ($bolsas as $bolsa)    
            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 ">
              <div class="card currency-bx overflow-hidden relative bg-info">
                <div class="card-body p-4">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <h5 class="text-white fs-20">{{ $bolsa->nombre }}</h5>
                      <h1 class="text-white mb-0">${{ $bolsa->saldo }}</h1>
                    </div>
                    <div class="currency-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45" height="45" fill="#319bd7" viewBox="0 0 512 512"><g><g><path d="M256,0C114.624,0,0,114.624,0,256s114.624,256,256,256s256-114.624,256-256S397.376,0,256,0z M272,208 c8.832,0,16,7.168,16,16c0,8.832-7.168,16-16,16h-78.656c-0.736,5.216-1.344,10.528-1.344,16s0.608,10.784,1.344,16H256 c8.832,0,16,7.168,16,16c0,8.832-7.168,16-16,16h-52.864c13.856,28.544,39.392,48,68.864,48c13.952,0,27.072-4.128,39.008-12.256 c7.264-4.928,17.248-3.104,22.208,4.192c4.96,7.296,3.104,17.248-4.224,22.24C311.904,377.824,292.192,384,272,384 c-46.88,0-87.008-33.184-103.68-80H144c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h17.408 c-0.576-5.312-1.408-10.528-1.408-16s0.832-10.688,1.408-16H144c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h24.32 c16.672-46.816,56.8-80,103.68-80c20.192,0,39.904,6.176,56.992,17.824c7.328,4.992,9.184,14.944,4.224,22.24 c-4.96,7.36-14.976,9.152-22.208,4.192C299.072,164.128,285.952,160,272,160c-29.472,0-55.008,19.456-68.864,48H272z"></path></g></g></svg>
                    </div>
                  </div>
                </div>
                <img class="bg-img" src="http://localhost/paytrack/public/images/money/euro.svg" alt="">
              </div>
            </div>
          @endforeach
        </div>
        
      </div>
@endsection
