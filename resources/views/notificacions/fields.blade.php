<!-- Informacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('informacion', 'Informacion:') !!}
    {!! Form::text('informacion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Tiponotificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoNotificacion', 'Tiponotificacion:') !!}
    {!! Form::text('tipoNotificacion', null, ['class' => 'form-control','maxlength' => 25,'maxlength' => 25]) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fecha').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::text('hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechanotificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNotificacion', 'Fechanotificacion:') !!}
    {!! Form::text('fechaNotificacion', null, ['class' => 'form-control','id'=>'fechaNotificacion']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaNotificacion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Idtipousuariodestinatario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipoUsuarioDestinatario', 'Idtipousuariodestinatario:') !!}
    {!! Form::number('idTipoUsuarioDestinatario', null, ['class' => 'form-control']) !!}
</div>

<!-- Idusuariodestinatario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUsuarioDestinatario', 'Idusuariodestinatario:') !!}
    {!! Form::number('idUsuarioDestinatario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('notificacions.index') }}" class="btn btn-default">Cancel</a>
</div>
