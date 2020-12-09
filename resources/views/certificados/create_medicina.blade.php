

@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/Usuario/agregarUsuario.css') }}">

@section('content')
    <section class="content-header">
        Complete los siguientes campos <br> para ingresar un certificado.
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'certificados.store']) !!}

                        @include('certificados.fields_medicina')

                    {!! Form::close() !!}
                    <a href="{{ url('/usuario') }}"><button href="" type="button" class="button">Cancelar</button></a> 
                </div>
            </div>
        </div>
    </div>
@endsection
