@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clientes</h1>
                </div>
                <div class="col-sm-6">
                
                    <a class="btn btn-primary float-right "
                       href="{{ route('clientes.create') }}">
                       <span class="glyphicon glyphicon-user" id="sizing-addon1"></span>
                        Agregar un nuevo cliente
                    </a>
                        <div class="input-group-btn"> <button type="button" class="btn btn-default" aria-label="Help">
                        <span class="glyphicon glyphicon-question-sign"></span>
                        </button> 
                        <button type="button" class="btn btn-default">Action</button> 
                        </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('clientes.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

