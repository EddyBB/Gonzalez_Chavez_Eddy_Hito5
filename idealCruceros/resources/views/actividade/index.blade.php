@extends('layouts.master')

@section('template_title')
    Actividade
@endsection

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Actividades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('actividades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva') }}
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
                                        
										<th>Id Actividades</th>
										<th>Id Crucero</th>
										<th>Tematica</th>
										<th>Horario Actividad</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actividades as $actividade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $actividade->id_actividades }}</td>
											<td>{{ $actividade->id_crucero }}</td>
											<td>{{ $actividade->tematica }}</td>
											<td>{{ $actividade->horario_actividad }}</td>
											<td>{{ $actividade->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('actividades.destroy',$actividade->id_actividades) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('actividades.show',$actividade->id_actividades) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('actividades.edit',$actividade->id_actividades) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $actividades->links() !!}
            </div>
        </div>
    </div>
@endsection
