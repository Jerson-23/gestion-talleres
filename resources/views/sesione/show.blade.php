@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sesione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sesiones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Tema:</strong>
                            {{ $sesione->tema }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $sesione->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ubicacion:</strong>
                            {{ $sesione->ubicacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Instructor:</strong>
                            {{ $sesione->instructor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sesionescol:</strong>
                            {{ $sesione->sesionescol }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nivel Dificultades Id:</strong>
                            {{ $sesione->nivel_dificultades_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Talleres Id:</strong>
                            {{ $sesione->talleres_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
