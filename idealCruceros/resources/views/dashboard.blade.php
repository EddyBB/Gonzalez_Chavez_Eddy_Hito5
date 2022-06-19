@extends('layouts.master')
@section('title'.'Dashboard')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Panel Administrador</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-xl-2 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Cruceros</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('cruceros.index')}}">{{__('Detalles') }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Usuarios</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('users.index')}}">{{__('Detalles') }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-success text-white mb-4">

                    <div class="card-body">Tripulación</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('tripulacion.index')}}">{{__('Detalles') }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">Reservas</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('reservas.index')}}">{{__('Detalles') }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-6">
                <div class="card bg-info text-white mb-4">
                    <div class="card-body">Actividades</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('actividades.index')}}">{{__('Detalles') }}</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Nuevos usuarios registrados
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>


                                <th>Id Usuario</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Dni</th>
                                <th>FechaNaci</th>
                                <th>NumTlf</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>

                                <td>{{ $user->id_usuario }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->dni }}</td>
                                <td>{{ $user->fechaNaci }}</td>
                                <td>{{ $user->numTlf }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection