@extends('layouts.app')
  <link rel="stylesheet" href="{{ asset('css/Usuario/agregarUsuario.css') }}">
@section('content')
    <section class="content-header">
       Para realizar el ingreso de un nuevo usuario <br> al sistema complete los siguientes campos.
    </section>
    <div class="content">
    <!--    @include('adminlte-templates::common.errors')-->
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'users.store']) !!}

                        @include('users.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
