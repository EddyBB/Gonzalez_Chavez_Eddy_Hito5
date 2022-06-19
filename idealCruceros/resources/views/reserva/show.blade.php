@extends('layouts.master')

@section('template_title')
    {{ $reserva->name ?? 'Show Reserva' }}
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Reserva:</strong>
                            {{ $reserva->id_reserva }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $reserva->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Crucero:</strong>
                            {{ $reserva->id_crucero }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Reserva:</strong>
                            {{ $reserva->fecha_reserva }}
                        </div>
                        <div class="form-group">
                            <strong>Personas:</strong>
                            {{ $reserva->personas }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Final:</strong>
                            {{ $reserva->precio_final }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
