<!-- Legajo Field -->
<!-- Legajo Field -->
<div class="form">
    {!! Form::label('legajo', 'Legajo') !!} <br>
    {!! Form::number('legajo', null, ['class' => 'form-control','autofocus','placeholder' => '   Legajo']) !!}
    <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('legajo'))
        <span class="help-block">
        <strong>{{ $errors->first('legajo') }}</strong>
    </span>
    @endif
</div>

<!-- Nombreusuario Field -->
<div class="form">
    {!! Form::label('nombreUsuario', 'Nombre') !!}<br>
    {!! Form::text('nombreUsuario', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30,'placeholder' => 'Nombre']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('nombreUsuario'))
        <span class="help-block">
        <strong>{{ $errors->first('nombreUsuario') }}</strong>
    </span>
    @endif
</div>


<!-- Apellido Field --> 
<div class="form">                      
    {!! Form::label('apellido', 'Apellido') !!}<br>         
    {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45,'placeholder' => 'Apellido']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('apellido'))
        <span class="help-block">
        <strong>{{ $errors->first('apellido') }}</strong>
    </span>
    @endif
</div>

<!-- Email Field -->
<div class="form">
    {!! Form::label('email', 'Email') !!}<br>
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'placeholder' => 'Email']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('email'))
        <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
</div>

<!-- Email Verified At Field 
<div class="form">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
-->




<!-- Password Field -->
<div class="form">
    {!! Form::label('password', 'Contraseña') !!}<br>
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255,'placeholder' => 'Contraseña']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('password'))
        <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
</div>

<!-- Remember Token Field
<div class="form">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div> -->

<!-- Fechanacimiento Field -->
<div class="form">
    {!! Form::label('fechaNacimiento', 'Fecha de nacimiento') !!}<br>
    {!! Form::text('fechaNacimiento', null, ['class' => 'form-control','id'=>'fechaNacimiento','placeholder' => 'Fecha de nacimiento']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('fechaNacimiento'))
        <span class="help-block">
        <strong>{{ $errors->first('fechaNacimiento') }}</strong>
    </span>
    @endif
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

<!-- Idlocalidad Field -->

<div class="form-select">
    {!! Form::label('idLocalidad', 'Localidad') !!}<br> 
    {!! Form::select('idLocalidad',$localidades, null, ['class' => 'select']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idLocalidad'))
        <span class="help-block">
        <strong>{{ $errors->first('idLocalidad') }}</strong>
    </span>
    @endif
</div>

<!-- Direccion Field -->

<div class="form">
    {!! Form::label('direccion', 'Direccion') !!}<br>
    {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45,'placeholder' => 'Dirección']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('direccion'))
        <span class="help-block">
        <strong>{{ $errors->first('direccion') }}</strong>
    </span>
    @endif
</div>

<!-- Idtipodocumento Field -->

<div class="form-select">
    {!! Form::label('idTipoDocumento', 'Tipo de documento') !!}<br>
    {!! Form::select('idTipoDocumento', $tipo_documento, null, ['class' => 'select']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idTipoDocumento'))
        <span class="help-block">
        <strong>{{ $errors->first('idTipoDocumento') }}</strong>
    </span>
    @endif
</div>

<!-- Numerodocumento Field -->
<div class="form">
    {!! Form::label('numeroDocumento', 'Numero de documento') !!}<br>
    {!! Form::number('numeroDocumento', null, ['class' => 'form-control','placeholder' => '   Documento']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('numeroDocumento'))
        <span class="help-block">
        <strong>{{ $errors->first('numeroDocumento') }}</strong>
    </span>
    @endif
</div>

<!-- Estadobaja Field -->
<div class="form">
    {!! Form::label('estadoBaja', 'Estado') !!}<br>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('estadoBaja'))
        <span class="help-block">
        <strong>{{ $errors->first('estadoBaja') }}</strong>
    </span>
    @endif
    
    <label class="checkbox-inline">
        {!! Form::hidden('estadoBaja', 0) !!}
        {!! Form::checkbox('estadoBaja', '1', null) !!}
    </label>

    
</div>


<!-- Idcargo Field -->

<div class="form-select">
    {!! Form::label('idCargo', 'Cargo') !!}<br>
    {!! Form::select('idCargo', $cargos,null, ['class' => 'select']) !!}
      <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idCargo'))
        <span class="help-block">
        <strong>{{ $errors->first('idCargo') }}</strong>
    </span>
    @endif
</div>



<!-- Idtipousuario Field -->
<div class="form-select">
    {!! Form::label('idTipoUsuario', 'Tipo de usuario') !!}<br>
    {!! Form::select('idTipoUsuario',$tipo_usuario, null, ['class' => 'select']) !!}
       <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idTipoUsuario'))
        <span class="help-block">
        <strong>{{ $errors->first('idTipoUsuario') }}</strong>
    </span>
    @endif
</div>

<!-- Idrol Field -->
<div class="form-select">
    {!! Form::label('idRol', 'Rol') !!}<br>
    {!! Form::select('idRol',$roles, null, ['class' => 'select']) !!}
        <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idRol'))
        <span class="help-block">
        <strong>{{ $errors->first('idRol') }}</strong>
    </span>
    @endif
</div>

<!-- Idgenero Field -->
<div class="form-select">
    {!! Form::label('idGenero', 'Genero') !!}<br>
    {!! Form::select('idGenero',$generos, null, ['class' => 'select']) !!}
       <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idGenero'))
        <span class="help-block">
        <strong>{{ $errors->first('idGenero') }}</strong>
    </span>
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Ingresar', ['class' => 'button']) !!} <br> <br>
   <a href="{{ url('/usuario') }}"><button href="" type="button" class="button">Cancelar</button></a> 

</div>
