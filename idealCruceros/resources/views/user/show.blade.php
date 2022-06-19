@extends('layouts.master')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $user->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $user->dni }}
                        </div>
                        <div class="form-group">
                            <strong>FechaNaci:</strong>
                            {{ $user->fechaNaci }}
                        </div>
                        <div class="form-group">
                            <strong>NumTlf:</strong>
                            {{ $user->numTlf }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
