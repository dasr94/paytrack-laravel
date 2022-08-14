{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
					</ol>
                </div>
                <!-- row -->

				<h1>hola</h1>

				<div class="row">
					<div class="col-12 col-md-6">
						<div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="form-row">
											<div class="form-group col-md-6">
												<label>Materia:</label>
												<div class="dropdown bootstrap-select form-control">
													<select class="form-control" id="sel1" tabindex="-98">
														<option>Lenguaje</option>
														<option>Ciencia</option>
														<option>Matematicas</option>
														<option>Sociales</option>
														<option>Ingles</option>
														<option>phonics</option>
														<option>Caligrafia</option>
														<option>Biblia</option>
														<option>Artistica</option>
														<option>Educacion Fisica</option>
													</select>
												</div>
											</div>
                                            <div class="form-group col-md-6">
                                                <label>First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-12 col-md-6"></div>
				</div>
                
            </div>
@endsection