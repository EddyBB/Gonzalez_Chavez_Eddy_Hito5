<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_tripulante') }}
            {{ Form::text('id_tripulante', $tripulacion->id_tripulante, ['class' => 'form-control' . ($errors->has('id_tripulante') ? ' is-invalid' : ''), 'placeholder' => 'Id Tripulante']) }}
            {!! $errors->first('id_tripulante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $tripulacion->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_crucero') }}
            {{ Form::text('id_crucero', $tripulacion->id_crucero, ['class' => 'form-control' . ($errors->has('id_crucero') ? ' is-invalid' : ''), 'placeholder' => 'Id Crucero']) }}
            {!! $errors->first('id_crucero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('funcion') }}
            {{ Form::text('funcion', $tripulacion->funcion, ['class' => 'form-control' . ($errors->has('funcion') ? ' is-invalid' : ''), 'placeholder' => 'Funcion']) }}
            {!! $errors->first('funcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>