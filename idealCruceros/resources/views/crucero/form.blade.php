<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_crucero') }}
            {{ Form::text('id_crucero', $crucero->id_crucero, ['class' => 'form-control' . ($errors->has('id_crucero') ? ' is-invalid' : ''), 'placeholder' => 'Id Crucero']) }}
            {!! $errors->first('id_crucero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $crucero->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $crucero->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin', $crucero->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puerto_origen') }}
            {{ Form::text('puerto_origen', $crucero->puerto_origen, ['class' => 'form-control' . ($errors->has('puerto_origen') ? ' is-invalid' : ''), 'placeholder' => 'Puerto Origen']) }}
            {!! $errors->first('puerto_origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puerto_fin') }}
            {{ Form::text('puerto_fin', $crucero->puerto_fin, ['class' => 'form-control' . ($errors->has('puerto_fin') ? ' is-invalid' : ''), 'placeholder' => 'Puerto Fin']) }}
            {!! $errors->first('puerto_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $crucero->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $crucero->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img_crucero') }}
            {{ Form::text('img_crucero', $crucero->img_crucero, ['class' => 'form-control' . ($errors->has('img_crucero') ? ' is-invalid' : ''), 'placeholder' => 'Img Crucero']) }}
            {!! $errors->first('img_crucero', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>