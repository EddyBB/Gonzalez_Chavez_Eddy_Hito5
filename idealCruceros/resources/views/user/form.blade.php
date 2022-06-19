<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $user->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaNaci') }}
            {{ Form::text('fechaNaci', $user->fechaNaci, ['class' => 'form-control' . ($errors->has('fechaNaci') ? ' is-invalid' : ''), 'placeholder' => 'Fechanaci']) }}
            {!! $errors->first('fechaNaci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numTlf') }}
            {{ Form::text('numTlf', $user->numTlf, ['class' => 'form-control' . ($errors->has('numTlf') ? ' is-invalid' : ''), 'placeholder' => 'Numtlf']) }}
            {!! $errors->first('numTlf', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::text('password', null, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group py-2">
            {{ Form::label('rol') }}
            {{--{{ Form::text('rol', $user->rol, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'rol']) }}--}}
            {{ Form::select('rol', [ 'admin' => 'admin', 'tripulante' => 'tripulante' ], null, ['class' => 'form-control col-md-8' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un rol']) }}
            {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>