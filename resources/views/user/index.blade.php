@extends('layouts.app')
@section('content')
<article class="content responsive-tables-page">
                    <div class="title-block">
                        <h1 class="title"> Usuarios </h1>
                        <p class="title-description"> lista de usuarios </p>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Responsivo simple </h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>Nombre Usuario</th>
															<th>Email</th>
															<th>Tipo de usuario ID</th>
														</tr>
													</thead>
													<?php foreach ($user as $key => $u): ?>
													<tbody>
														<tr>
															<td>{{$u->name}}</td>
															<td>{{$u->email}}</td>
															<td>{{$u->users_type_id}}</td>
														</tr>
													</tbody>
													<?php endforeach ?>
												</table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Responsivo flip-scroll </h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-flip-scroll">
                                            	<table class="table table-striped table-bordered table-hover flip-content">
													<thead class="flip-header">
														<tr><div class="mobile-menu-handle"></div>
															<th>Nombre Usuario</th>
															<th>Email</th>
															<th>Tipo de usuario ID</th>
														</tr>
													</thead>
													<?php foreach ($user as $key => $u): ?>
													<tbody>
														<tr >
															<td>{{$u->name}}</td>
															<td>{{$u->email}}</td>
															<td>{{$u->users_type_id}}</td>
														</tr>
													</tbody>
													<?php endforeach ?>
												</table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>
@endsection
	
	
