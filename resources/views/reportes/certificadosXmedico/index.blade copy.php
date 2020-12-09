@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Certificados por Doc</h1>
        <h1 class="pull-right">
         
        </h1>
    </section>
    <div class="content">
        <div class="clearfix">
           
        </div>

        @include('flash::message')

        <div class="clearfix">
      
        </div>

        <div class="table-responsive">
            <table class="table" id="certificados-table">
                <thead>
                    <tr>
                        <th>Fecha Certificado</th>
                        <th>Médico</th>
                        <th>Patología</th>
                        <th>Fecha de Vencimiento</th>
                        <th>Otro</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($certificados as $certificado)
                    <tr>
                        <td> {{ $certificado->fechaCertificado }}</td>
                        <td> {{ $certificado->medico->apellido . ','.  $certificado->medico->nombres }}</td> 
                        <td> {{ $certificado->patologia->nombrePatologia }} </td> 
                        <td> {{ $certificado->fechaVencimiento }}</td>
                        <td>  Otro              </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center">
            
        </div>
    </div>
@endsection

