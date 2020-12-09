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
            <div class="content-header">
                Ingrese los campos de para registrar <br> un nuevo usuario al sistema.
            </div>
        
            <div class="register-box-body">
               
        
                <form method="post" action="{{ url('/register') }}">
                    
                    @csrf
        
                    
        <!-- Legajo Field -->
        <div class="form">
            {!! Form::label('legajo', 'Legajo') !!} <br>
            {!! Form::number('legajo', null, ['class' => 'form-control','autofocus']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('legajo'))
                <span class="help-block">
                <strong>{{ $errors->first('legajo') }}</strong>
            </span>
            @endif
        </div>
        
        <!-- Apellido Field -->
        <div class="form">
            {!! Form::label('apellido', 'Apellidos') !!} <br>
            {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('apellido'))
                <span class="help-block">
                <strong>{{ $errors->first('apellido') }}</strong>
            </span>      @endif
        </div>
        
        <!-- Nombreusuario Field -->
        <div class="form">
            {!! Form::label('nombreUsuario', 'Nombres') !!}<br>
            {!! Form::text('nombreUsuario', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('nombreUsuario'))
                <span class="help-block">
                <strong>{{ $errors->first('nombreUsuario') }}</strong>
            </span>      @endif</div>
        
        <!-- Contrasenausuario Field -->
        <div class="form">
            {!! Form::label('contrasenaUsuario', 'Contraseña') !!}<br>
            {!! Form::text('contrasenaUsuario', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('contrasenaUsuario'))
                <span class="help-block">
                <strong>{{ $errors->first('contrasenaUsuario') }}</strong>
            </span>      @endif</div>
        
        <!-- Fechanacimiento Field -->
        <div class="form " >
            {!! Form::label('fechaNacimiento', 'Fecha de nacimiento') !!}<br>
            {!! Form::date('fechaNacimiento', null, ['class' => 'form-control','id'=>'fechaNacimiento']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('fechaNacimiento'))
                <span class="help-block">
                <strong>{{ $errors->first('fechaNacimiento') }}</strong>
            </span>      @endif
        
        
        </div>  
        <!-- Direccion Field -->
        <div class="form">
            {!! Form::label('direccion', 'Direccion') !!}<br>
            {!! Form::text('direccion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('direccion'))
                <span class="help-block">
                <strong>{{ $errors->first('direccion') }}</strong>
            </span>      @endif</div>
        
        <!-- Correoelectronico Field -->
        <div class="form">
            {!! Form::label('correoElectronico', 'Correo electronico') !!}<br>
            {!! Form::text('correoElectronico', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('correoElectronico'))
                <span class="help-block">
                <strong>{{ $errors->first('correoElectronico') }}</strong>
            </span>      @endif</div>
        
        <!-- Numerodocumento Field -->
        <div class="form">
            {!! Form::label('numeroDocumento', 'Numero de ddocumento') !!}<br>
            {!! Form::number('numeroDocumento', null, ['class' => 'form-control']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('numeroDocumento'))
                <span class="help-block">
                <strong>{{ $errors->first('numeroDocumento') }}</strong>
            </span>      @endif</div>
        
        <!-- Estadobaja Field -->
        <div class="form">
            {!! Form::label('estadoBaja', 'Estado de usuario') !!}<br>
            <label class="checkbox-inline">
                {!! Form::hidden('estadoBaja', 0) !!}
                {!! Form::checkbox('estadoBaja', '1', null) !!}
            </label>   <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('estadoBaja'))
                <span class="help-block">
                <strong>{{ $errors->first('estadoBaja') }}</strong>
            </span>      @endif
        </div>
        
        
        <!-- Idcargo Field -->
        <div class="form">
            {!! Form::label('idCargo', 'Cargo') !!}<br>
            {!! Form::number('idCargo', null, ['class' => 'form-control']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('idCargo'))
                <span class="help-block">
                <strong>{{ $errors->first('idCargo') }}</strong>
            </span>      @endif</div>
        
        <!-- Idlocalidad Field -->
        <div class="form">
            {!! Form::label('idLocalidad', 'Localidad') !!}<br>
            {!! Form::number('idLocalidad', null, ['class' => 'form-control']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('idLocalidad'))
                <span class="help-block">
                <strong>{{ $errors->first('idLocalidad') }}</strong>
            </span>      @endif</div>
        
        <!-- Idtipodocumento Field -->
        <div class="form">
            {!! Form::label('idTipoDocumento', 'Tipo de documento') !!}<br>
            {!! Form::number('idTipoDocumento', null, ['class' => 'form-control']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('idTipoDocumento'))
                <span class="help-block">
                <strong>{{ $errors->first('idTipoDocumento') }}</strong>
            </span>      @endif</div>
        
        <!-- Idtipousuario Field -->
        <div class="form">
            {!! Form::label('idTipoUsuario', 'Tipo de usuario') !!}<br>
            {!! Form::number('idTipoUsuario', null, ['class' => 'form-control']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('idTipoUsuario'))
                <span class="help-block">
                <strong>{{ $errors->first('idTipoUsuario') }}</strong>
            </span>      @endif</div>
        
        <!-- Idrol Field -->
        <div class="form">
            {!! Form::label('idRol', 'Rol') !!}<br>
            {!! Form::number('idRol', null, ['class' => 'form-control']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('idRol'))
                <span class="help-block">
                <strong>{{ $errors->first('idRol') }}</strong>
            </span>      @endif</div>
        
        <!-- Idgenero Field -->
        <div class="form">
            {!! Form::label('idGenero', 'Genero ') !!}<br>
            {!! Form::number('idGenero', null, ['class' => 'form-control']) !!}
            <br><span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('idGenero'))
                <span class="help-block">
                <strong>{{ $errors->first('idGenero') }}</strong>
            </span>      @endif</div>
        
        <!-- Submit Field -->
        <br>
                        <!-- /.col -->
                        <div class="col">
                            <button type="submit" class="button">Registrar</button> 
                        </div>
                        <br><br><br><br>
                        <!-- /.col -->
                    </div>
                </form>
        
                 </div>
            <!-- /.form-box -->
            @include('footer')
        </div>
        <!-- /.register-box -->
        <!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
         AdminLTE App   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
        -->
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
