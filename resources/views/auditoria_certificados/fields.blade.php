<!-- Fechamodificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaModificacion', 'Fechamodificacion:') !!}
    {!! Form::text('fechaModificacion', null, ['class' => 'form-control','id'=>'fechaModificacion']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaModificacion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Horamodificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horaModificacion', 'Horamodificacion:') !!}
    {!! Form::text('horaModificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipomodificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoModificacion', 'Tipomodificacion:') !!}
    {!! Form::text('tipoModificacion', null, ['class' => 'form-control','maxlength' => 1,'maxlength' => 1]) !!}
</div>

<!-- Diasdeausencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diasDeAusencia', 'Diasdeausencia:') !!}
    {!! Form::number('diasDeAusencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Numerocomprobante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroComprobante', 'Numerocomprobante:') !!}
    {!! Form::number('numeroComprobante', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechavencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaVencimiento', 'Fechavencimiento:') !!}
    {!! Form::text('fechaVencimiento', null, ['class' => 'form-control','id'=>'fechaVencimiento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaVencimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Fechacertificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaCertificado', 'Fechacertificado:') !!}
    {!! Form::text('fechaCertificado', null, ['class' => 'form-control','id'=>'fechaCertificado']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaCertificado').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::text('imagen', null, ['class' => 'form-control','maxlength' => 65535,'maxlength' => 65535]) !!}
</div>

<!-- Estadocerficado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadoCerficado', 'Estadocerficado:') !!}
    {!! Form::text('estadoCerficado', null, ['class' => 'form-control']) !!}
</div>

<!-- Idusuariocertificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUsuarioCertificado', 'Idusuariocertificado:') !!}
    {!! Form::number('idUsuarioCertificado', null, ['class' => 'form-control']) !!}
</div>

<!-- Idusuarioquemodifica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUsuarioQueModifica', 'Idusuarioquemodifica:') !!}
    {!! Form::number('idUsuarioQueModifica', null, ['class' => 'form-control']) !!}
</div>

<!-- Idpatologia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idPatologia', 'Idpatologia:') !!}
    {!! Form::number('idPatologia', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmedico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMedico', 'Idmedico:') !!}
    {!! Form::number('idMedico', null, ['class' => 'form-control']) !!}
</div>

<!-- Idtipocertificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipoCertificado', 'Idtipocertificado:') !!}
    {!! Form::number('idTipoCertificado', null, ['class' => 'form-control']) !!}
</div>

<!-- Idfamiliar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idFamiliar', 'Idfamiliar:') !!}
    {!! Form::number('idFamiliar', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcertificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCertificado', 'Idcertificado:') !!}
    {!! Form::number('idCertificado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('auditoriaCertificados.index') }}" class="btn btn-default">Cancel</a>
</div>
