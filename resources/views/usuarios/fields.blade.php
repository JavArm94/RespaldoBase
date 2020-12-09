<!-- Legajo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('legajo', 'Legajo:') !!}
    {!! Form::number('legajo', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Nombreusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreUsuario', 'Nombreusuario:') !!}
    {!! Form::text('nombreUsuario', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Contrasenausuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrasenaUsuario', 'Contrasenausuario:') !!}
    {!! Form::text('contrasenaUsuario', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    {!! Form::text('fechaNacimiento', null, ['class' => 'form-control','id'=>'fechaNacimiento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaNacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Direccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Correoelectronico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correoElectronico', 'Correoelectronico:') !!}
    {!! Form::text('correoElectronico', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Numerodocumento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroDocumento', 'Numerodocumento:') !!}
    {!! Form::number('numeroDocumento', null, ['class' => 'form-control']) !!}
</div>

<!-- Estadobaja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estadoBaja', 'Estadobaja:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('estadoBaja', 0) !!}
        {!! Form::checkbox('estadoBaja', '1', null) !!}
    </label>
</div>


<!-- Idcargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCargo', 'Idcargo:') !!}
    {!! Form::number('idCargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Idlocalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idLocalidad', 'Idlocalidad:') !!}
    {!! Form::number('idLocalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Idtipodocumento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipoDocumento', 'Idtipodocumento:') !!}
    {!! Form::number('idTipoDocumento', null, ['class' => 'form-control']) !!}
</div>

<!-- Idtipousuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idTipoUsuario', 'Idtipousuario:') !!}
    {!! Form::number('idTipoUsuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Idrol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idRol', 'Idrol:') !!}
    {!! Form::number('idRol', null, ['class' => 'form-control']) !!}
</div>

<!-- Idgenero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idGenero', 'Idgenero:') !!}
    {!! Form::number('idGenero', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancel</a>
</div>
