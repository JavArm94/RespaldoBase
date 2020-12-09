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
                    <a href="{{ url('/certificados/mostrar_certificados') }}"><button href="" type="button" class="button">Regresar</button></a> 
                </div>
            </div>
        </div>
    </div>
@endsection
