@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
            <div class="panel panel-default">
                <div class="title-block">
                        <h3 class="title"> Inicio </h3>
                        <p class="title-description"> </p>
                    </div>
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-xl-4">
                        <div class="card card-success">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Success </p>
                                </div>
                            </div>
                            <div class="card-block">
                                <p>Has iniciado sesión!</p>
                            </div>
                            <div class="card-footer"> 😊 </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
