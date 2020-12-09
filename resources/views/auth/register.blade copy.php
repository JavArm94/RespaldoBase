<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>InfyOm </b>Generator</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="post" action="{{ url('/register') }}">
            @csrf

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

<div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

    @if ($errors->has('password_confirmation'))
        <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
    @endif
</div>

<!-- 

<div class="form">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div> 
-->
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
    {!! Form::text('idLocalidad', null, ['class' => 'select']) !!}
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
    {!! Form::text('idTipoDocumento', null, ['class' => 'select']) !!}
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
    {!! Form::number('idCargo',null, ['class' => 'select']) !!}
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
    {!! Form::number('idTipoUsuario', null, ['class' => 'select']) !!}
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
    {!! Form::number('idRol', null, ['class' => 'select']) !!}
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
    {!! Form::number('idGenero', null, ['class' => 'select']) !!}
       <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('idGenero'))
        <span class="help-block">
        <strong>{{ $errors->first('idGenero') }}</strong>
    </span>
    @endif
</div>
<div class="col-xs-4">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
</div>

        </form>

        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
