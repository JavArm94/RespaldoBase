
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

        <h1 class="encabezado-tabla" style="text-align: center">Reporte de Ausentimo</h1>
    
       <div class="tabla-container">
            <div class="clearfix">
            @include('reportes.ausentismo.filtro')
          </div>

            <table style="width:100%" id="certificados-table" t>
                <thead> 
                    <tr>
                        <th>Legajo</th>
                        <th>Apellido</th>
                        <th>Nombres</th>
                        <th>Ausencias</th>
                    </tr>
                </thead>
                <tbody> 
                @foreach($certificados as $certificado)
                    <tr>
                        <td> {{ $certificado->usuario->legajo }} </td>
                        <td> {{ $certificado->usuario->apellido}} </td> 
                        <td> {{ $certificado->usuario->nombreUsuario }} </td> 
                        {{-- <td> {{ Carbon::parse('2020-11-01')->format('Y-m-d') }} </td>  --}}
                        <td> {{ $certificado->calcularDiasAusente('2020-11-01','2020-11-25') }}</td>
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
