@extends('layouts.master')

@section('template_title')
    {{ $tripulacion->name ?? 'Show Tripulacion' }}
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver tripulante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tripulacion.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tripulante:</strong>
                            {{ $tripulacion->id_tripulante }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $tripulacion->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Crucero:</strong>
                            {{ $tripulacion->id_crucero }}
                        </div>
                        <div class="form-group">
                            <strong>Funcion:</strong>
                            {{ $tripulacion->funcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
