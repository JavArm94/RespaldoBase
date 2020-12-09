@extends('layouts.app')
{{-- <link href="http://parking.test/plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="http://parking.test/plugins/flatpickr/material_red.css" rel="stylesheet" type="text/css"> --}}
@section('content')
    <section class="content-header">
        <h1 class="pull-left">Reporte de Certificados del Usuario</h1>
        <h1 class="pull-right">
           {{-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('certificados.create') }}">Add New</a> --}}
        </h1>
    </section>
    <div class="content">
        <div class="clearfix">
           
        </div>

        @include('flash::message')

        <div class="clearfix">
           @livewire('pedir-fechas') 
        </div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('reportes.certificados.table')
            </div>
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

