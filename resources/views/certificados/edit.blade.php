@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/Usuario/agregarUsuario.css')}}">

@section('content')
    <section class="content-header">
     Modifique los campos deseados <br>
      y confirme los cambios.
   </section>
   <div class="content">

       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($certificado, ['route' => ['certificados.update', $certificado->id], 'method' => 'patch']) !!}

                        @include('certificados.fields')

                   {!! Form::close() !!}

                   <a href="{{ url('/certificados/mostrar_certificados') }}"><button href="" type="button" class="button">Cancelar</button></a> 
               </div>
           </div>
       </div>
   </div>
@endsection