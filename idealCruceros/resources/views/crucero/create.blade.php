@extends('layouts.master')

@section('template_title')
    Create Crucero
@endsection

@section('content')
    <section class="content container-fluid my-3">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Crucero</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('cruceros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('crucero.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
