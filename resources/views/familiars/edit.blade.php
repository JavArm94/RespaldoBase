@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Familiar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($familiar, ['route' => ['familiars.update', $familiar->id], 'method' => 'patch']) !!}

                        @include('familiars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection