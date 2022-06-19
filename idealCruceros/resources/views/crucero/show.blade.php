@extends('layouts.master')

@section('template_title')
    {{ $crucero->name ?? 'Show Crucero' }}
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Crucero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cruceros.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Crucero:</strong>
                            {{ $crucero->id_crucero }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $crucero->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $crucero->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $crucero->fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Puerto Origen:</strong>
                            {{ $crucero->puerto_origen }}
                        </div>
                        <div class="form-group">
                            <strong>Puerto Fin:</strong>
                            {{ $crucero->puerto_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $crucero->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $crucero->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Img Crucero:</strong>
                            {{ $crucero->img_crucero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
