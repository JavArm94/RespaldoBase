@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Certificado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoCertificado, ['route' => ['tipoCertificados.update', $tipoCertificado->id], 'method' => 'patch']) !!}

                        @include('tipo_certificados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection