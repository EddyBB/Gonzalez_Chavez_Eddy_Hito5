@extends('layouts.master')

@section('template_title')
    Tripulacion
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

                             <div class="float-right">
                                <a href="{{ route('tripulacion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
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
                                        <th>No</th>
                                        
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
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tripulante->id_tripulante }}</td>
											<td>{{ $tripulante->id_usuario }}</td>
											<td>{{ $tripulante->id_crucero }}</td>
											<td>{{ $tripulante->funcion }}</td>

                                            <td>
                                                <form action="{{ route('tripulacion.destroy',$tripulante->id_tripulante) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tripulacion.show',$tripulante->id_tripulante) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tripulacion.edit',$tripulante->id_tripulante) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tripulacion->links() !!}
            </div>
        </div>
    </div>
@endsection
