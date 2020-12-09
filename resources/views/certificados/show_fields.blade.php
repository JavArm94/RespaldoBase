<!-- Diasdeausencia Field -->
<div class="form-group">
    {!! Form::label('diasDeAusencia', 'Dias de ausencia') !!}
    <p>{{ $certificado->diasDeAusencia }}</p>
</div>
<br>
<!-- Lugar Field -->
<div class="form-group">
    {!! Form::label('lugar', 'Lugar') !!}
    <p>{{ $certificado->lugar }}</p>
</div>
<br>
<!-- Numerocomprobante Field -->
<div class="form-group">
    {!! Form::label('numeroComprobante', 'Numero de comprobante') !!}
    <p>{{ $certificado->numeroComprobante }}</p>
</div>
<br>
<!-- Fechavencimiento Field -->
<div class="form-group">
    {!! Form::label('fechaVencimiento', 'Fecha de vencimiento') !!}
    <p>{{ $certificado->fechaVencimiento }}</p>
</div>
<br>
<!-- Fechacertificado Field -->
<div class="form-group">
    {!! Form::label('fechaCertificado', 'Fecha de emisión') !!}
    <p>{{ $certificado->fechaCertificado }}</p>
</div>
<br>
<!-- Imagen Field -->
<div class="form-group">
    {!! Form::label('imagen', 'Imagen:') !!}
    <p>{{ $certificado->imagen }}</p>
</div>
<br>
<!-- Estadocertificado Field -->
<div class="form-group">
    {!! Form::label('estadoCertificado', 'Estado del certificado') !!}
    <p>{{ $certificado->estadoCertificado }}</p>
</div>
<br>
<!-- Idusuariocertificado Field -->
<div class="form-group">
    {!! Form::label('idUsuarioCertificado', 'Usuario del certificado') !!}
    <p>{{ $certificado->idUsuarioCertificado }}</p>
</div>
<br>
<!-- Idpatologia Field -->
<div class="form-group">
    {!! Form::label('idPatologia', 'Patologia') !!}
    <p>{{ $certificado->idPatologia }}</p>
</div>
<br>
<!-- Idmedico Field -->
<div class="form-group">
    {!! Form::label('idMedico', 'Medico') !!}
    <p>{{ $certificado->idMedico }}</p>
</div>
<br>
<!-- Idtipocertificado Field -->
<div class="form-group">
    {!! Form::label('idTipoCertificado', 'Tipo de certificado') !!}
    <p>{{ $certificado->idTipoCertificado }}</p>
</div>
<br>
<!-- Idfamiliar Field -->
<div class="form-group">
    {!! Form::label('idFamiliar', 'Familiar') !!}
    <p>{{ $certificado->idFamiliar }}</p>
</div>

