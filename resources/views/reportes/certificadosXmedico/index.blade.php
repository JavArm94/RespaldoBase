
<?php use Carbon\Carbon; ?>
@extends('layouts.limpio')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{asset('css/mostrar_certificados.css')}}">
   </head>
    <title>MedicLab</title>
</head>

 @section('content') 
 @include('navbar')

        <h1 class="encabezado-tabla" style="text-align: center">Certificados emitidos por Médico </h1>
    
       <div class="tabla-container">
            <div class="clearfix">
            @include('reportes.certificadosXmedico.filtro')
          </div>

            <table style="width:100%" id="certificados-table" t>
                <thead> 
                    <tr>
                        <th>Titular</th>
                        <th>Fecha</th>
                        <th>Patología</th>
                        <th>Médico</th>
                        <th>Días de ausencia</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody> 
                @foreach($certificados as $certificado)
                    <tr>
                        <td> {{ $certificado->usuario->nombreUsuario .' '. $certificado->usuario->apellido}}</td> 
                        <td> {{ Carbon::parse($certificado->fechaCertificado)->format('d-m-Y') }}</td>
                        <td> {{ $certificado->patologia->nombrePatologia }} </td> 
                        <td> {{ $certificado->medico->apellidoNombres }} </td> 
                        <td> {{ $certificado->diasDeAusencia }}</td>
                        <td> {{ $certificado->estadoCertificado }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
          </div>
          <script type="text/javascript">
            $('#datepicker').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy',
                language: 'es'
             });
        </script>
 @include('footer')
@endsection
