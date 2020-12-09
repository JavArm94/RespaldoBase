<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $familiar->apellido }}</p>
</div>

<!-- Nombres Field -->
<div class="form-group">
    {!! Form::label('nombres', 'Nombres:') !!}
    <p>{{ $familiar->nombres }}</p>
</div>

<!-- Fechanacimiento Field -->
<div class="form-group">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    <p>{{ $familiar->fechaNacimiento }}</p>
</div>

<!-- Idusuario Field -->
<div class="form-group">
    {!! Form::label('idUsuario', 'Idusuario:') !!}
    <p>{{ $familiar->idUsuario }}</p>
</div>

<!-- Idparentesco Field -->
<div class="form-group">
    {!! Form::label('idParentesco', 'Idparentesco:') !!}
    <p>{{ $familiar->idParentesco }}</p>
</div>

<!-- Idgenero Field -->
<div class="form-group">
    {!! Form::label('idGenero', 'Idgenero:') !!}
    <p>{{ $familiar->idGenero }}</p>
</div>

