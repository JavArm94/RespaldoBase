@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Notificacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($notificacion, ['route' => ['notificacions.update', $notificacion->id], 'method' => 'patch']) !!}

                        @include('notificacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection