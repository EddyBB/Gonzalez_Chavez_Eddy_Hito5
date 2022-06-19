@extends('layouts.master')

@section('template_title')
    Update Crucero
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Crucero</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cruceros.update', $crucero->id_crucero) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('crucero.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
