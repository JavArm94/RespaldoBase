@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/certificados/show_certificados.css')}}">
@section('content')
    <section class="content-header">
            Datos de certificado seleccionado
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('certificados.show_fields')
                    
                    <br><br>


                    @if (!Auth::user()->idRol==1)
                    <a href="{{ url('/certificados/mostrar_certificados') }}"><button href="" type="button" class="button">Regresar</button></a> 
     
                    @else
                    <a href="{{ url('/certificados/mostrar_certificados_personal') }}"><button href="" type="button" class="button">Regresar</button></a> 

                    @endif

                
                </div>
            </div>
        </div>
    </div>
@endsection
