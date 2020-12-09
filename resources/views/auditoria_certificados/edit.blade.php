@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Auditoria Certificado
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($auditoriaCertificado, ['route' => ['auditoriaCertificados.update', $auditoriaCertificado->id], 'method' => 'patch']) !!}

                        @include('auditoria_certificados.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection