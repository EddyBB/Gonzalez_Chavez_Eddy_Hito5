@extends('layouts.master')

@section('template_title')
    {{ $actividade->name ?? 'Show Actividade' }}
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Actividad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actividades.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Actividades:</strong>
                            {{ $actividade->id_actividades }}
                        </div>
                        <div class="form-group">
                            <strong>Id Crucero:</strong>
                            {{ $actividade->id_crucero }}
                        </div>
                        <div class="form-group">
                            <strong>Tematica:</strong>
                            {{ $actividade->tematica }}
                        </div>
                        <div class="form-group">
                            <strong>Horario Actividad:</strong>
                            {{ $actividade->horario_actividad }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $actividade->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
