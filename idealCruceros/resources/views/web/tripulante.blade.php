@extends('layouts.tripulante_nav')

@section('template_title')
{{ $user->name ?? 'Tripulante' }}
@endsection

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tripulacion') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>

										<th>Id Tripulante</th>
										<th>Id Usuario</th>
										<th>Id Crucero</th>
										<th>Funcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tripulacion as $tripulante)
                                        <tr>
                                            
											<td>{{ $tripulante->id_tripulante }}</td>
											<td>{{ $tripulante->id_usuario }}</td>
											<td>{{ $tripulante->id_crucero }}</td>
											<td>{{ $tripulante->funcion }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
