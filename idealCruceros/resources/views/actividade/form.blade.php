<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_actividades') }}
            {{ Form::text('id_actividades', $actividade->id_actividades, ['class' => 'form-control' . ($errors->has('id_actividades') ? ' is-invalid' : ''), 'placeholder' => 'Id Actividades']) }}
            {!! $errors->first('id_actividades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_crucero') }}
            {{ Form::text('id_crucero', $actividade->id_crucero, ['class' => 'form-control' . ($errors->has('id_crucero') ? ' is-invalid' : ''), 'placeholder' => 'Id Crucero']) }}
            {!! $errors->first('id_crucero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tematica') }}
            {{ Form::text('tematica', $actividade->tematica, ['class' => 'form-control' . ($errors->has('tematica') ? ' is-invalid' : ''), 'placeholder' => 'Tematica']) }}
            {!! $errors->first('tematica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario_actividad') }}
            {{ Form::text('horario_actividad', $actividade->horario_actividad, ['class' => 'form-control' . ($errors->has('horario_actividad') ? ' is-invalid' : ''), 'placeholder' => 'Horario Actividad']) }}
            {!! $errors->first('horario_actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $actividade->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>