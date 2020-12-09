{{-- {{ dd($medicos) }} --}}
{!! Form::model(request()->all(), ['route' => 'ausentismo', 'method' => 'GET', 'class' => 'form-inline']) !!}


    {!! Form::label('fecha_inicial', 'Desde: ') !!}
    {!! Form::date('fecha_inicial', null) !!}

    {!! Form::label('fecha_final', 'Hasta: ') !!}
    {!! Form::date('fecha_final', null) !!}

    <button type="submit" class="btn btn-primary mr-sm-2">
        <i class="fas fa-search"></i> Filtrar
    </button>
    @if($request->fecha_inicial || $request->fecha_final)
    <a href="{{ route('ausentismo') }}" >
        <i class="fas fa-sync-alt"></i> Limpiar filtro
    </a>
    @endif
    
{!! Form::close() !!}<br>

