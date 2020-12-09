<!-- Idcertificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCertificado', 'Idcertificado:') !!}
    {!! Form::number('idCertificado', null, ['class' => 'form-control']) !!}
</div>

<!-- Idnotificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idNotificacion', 'Idnotificacion:') !!}
    {!! Form::number('idNotificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('notificacionCertificados.index') }}" class="btn btn-default">Cancel</a>
</div>
