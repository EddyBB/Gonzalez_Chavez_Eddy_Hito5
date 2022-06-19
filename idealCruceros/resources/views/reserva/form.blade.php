<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_reserva') }}
            {{ Form::text('id_reserva', $reserva->id_reserva, ['class' => 'form-control' . ($errors->has('id_reserva') ? ' is-invalid' : ''), 'placeholder' => 'Id Reserva']) }}
            {!! $errors->first('id_reserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $reserva->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_crucero') }}
            {{ Form::text('id_crucero', $reserva->id_crucero, ['class' => 'form-control' . ($errors->has('id_crucero') ? ' is-invalid' : ''), 'placeholder' => 'Id Crucero']) }}
            {!! $errors->first('id_crucero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_reserva') }}
            {{ Form::text('fecha_reserva', $reserva->fecha_reserva, ['class' => 'form-control' . ($errors->has('fecha_reserva') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Reserva']) }}
            {!! $errors->first('fecha_reserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('personas') }}
            {{ Form::text('personas', $reserva->personas, ['class' => 'form-control' . ($errors->has('personas') ? ' is-invalid' : ''), 'placeholder' => 'Personas']) }}
            {!! $errors->first('personas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_final') }}
            {{ Form::text('precio_final', $reserva->precio_final, ['class' => 'form-control' . ($errors->has('precio_final') ? ' is-invalid' : ''), 'placeholder' => 'Precio Final']) }}
            {!! $errors->first('precio_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>