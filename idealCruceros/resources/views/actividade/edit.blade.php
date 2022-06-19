@extends('layouts.master')

@section('template_title')
    Update Actividade
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar  Actividad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividades.update', $actividade->id_actividades) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('actividade.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
