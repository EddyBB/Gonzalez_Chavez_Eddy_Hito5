@extends('layouts.master')

@section('title'.'Cruceros')
    Crucero
@endsection

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Crucero') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cruceros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                                        
										<th>Id Crucero</th>
										<th>Nombre</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Puerto Origen</th>
										<th>Puerto Fin</th>
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Img Crucero</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cruceros as $crucero)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $crucero->id_crucero }}</td>
											<td>{{ $crucero->nombre }}</td>
											<td>{{ $crucero->fecha_inicio }}</td>
											<td>{{ $crucero->fecha_fin }}</td>
											<td>{{ $crucero->puerto_origen }}</td>
											<td>{{ $crucero->puerto_fin }}</td>
											<td>{{ $crucero->descripcion }}</td>
											<td>{{ $crucero->precio }}</td>
											<td>{{ $crucero->img_crucero }}</td>

                                            <td>
                                                <form action="{{ route('cruceros.destroy',$crucero->id_crucero) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cruceros.show',$crucero->id_crucero) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cruceros.edit',$crucero->id_crucero) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $cruceros->links() !!}
            </div>
        </div>
    </div>
@endsection
