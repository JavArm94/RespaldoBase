<!-- Informacion Field -->
<div class="form-group">
    {!! Form::label('informacion', 'Informacion:') !!}
    <p>{{ $notificacion->informacion }}</p>
</div>

<!-- Tiponotificacion Field -->
<div class="form-group">
    {!! Form::label('tipoNotificacion', 'Tiponotificacion:') !!}
    <p>{{ $notificacion->tipoNotificacion }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $notificacion->fecha }}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    <p>{{ $notificacion->hora }}</p>
</div>

<!-- Fechanotificacion Field -->
<div class="form-group">
    {!! Form::label('fechaNotificacion', 'Fechanotificacion:') !!}
    <p>{{ $notificacion->fechaNotificacion }}</p>
</div>

<!-- Idtipousuariodestinatario Field -->
<div class="form-group">
    {!! Form::label('idTipoUsuarioDestinatario', 'Idtipousuariodestinatario:') !!}
    <p>{{ $notificacion->idTipoUsuarioDestinatario }}</p>
</div>

<!-- Idusuariodestinatario Field -->
<div class="form-group">
    {!! Form::label('idUsuarioDestinatario', 'Idusuariodestinatario:') !!}
    <p>{{ $notificacion->idUsuarioDestinatario }}</p>
</div>

