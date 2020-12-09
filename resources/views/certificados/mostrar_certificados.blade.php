@if (Auth::user()->idRol==1)
    @include('navbar-auth')
    @include('status-bar')

@elseif(Auth::user()->idRol==2)
    @include('navbar-medicina-auth')

@else
  @include('navbar-general-auth')   
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{asset('css/certificados/mostrar_certificados.css')}}">
    <title>Document</title>
</head>
<body>

    @include('navbar-select-certificados')

    @if ($certificados==null)
    <div class="info-text" style="padding-bottom: 240px;padding-top: 200px">No existen certificados ingresados.</div>

    @else
    
    <div class="info-text">Los certificados activos son aquellos que están
        vigentes y justificados.</div>


    <div class="tabla-container">

    <table style="width:100%">
    <tr ><th>Titular</th><th>Fecha</th><th>Patología</th><th>Medíco</th><th>Días de ausencia</th><th>Estado</th></tr>
   
    @foreach ($certificados as $certificado)
    
    <tr>
        <th>{{$certificado['Titular'][0]->nombres}}</th>
        <th>{{$certificado['Fecha']}}</th>
        <th>{{$certificado['Patologia'][0]->nombrePatologia}}</th>
        <th>{{$certificado['Medico'][0]->nombres}}</th>
        <th>{{$certificado['DiasAusencia']}}</th>
        <th>{{$certificado['Estado']}}</th>
        <th class="action-th">
@if ($certificado['Estado']=='Pendiente')
<a href="{{ route('certificados.show', [$certificado['Id']]) }}" >      <button class="button-th">  Ver</button>   </a> <br>
<a href="{{ route('certificados.edit', [$certificado['Id']]) }}" >  <button class="button-th">  Modificar</button></a> <br>
 
{!! Form::open(['route' => ['certificados.destroy', $certificado['Id']], 'method' => 'delete']) !!}
{!! Form::button('Eliminar', ['type' => 'submit','class'=> 'button-th' ,'onclick' => "return confirm('¿Está seguro?')"]) !!} 
  {!! Form::close() !!}
  </th>    
  @else
  <a href="{{ route('certificados.show', [$certificado['Id']]) }}" >      <button class="button-th">  Ver</button>   </a> <br>
{!! Form::open(['route' => ['certificados.destroy', $certificado['Id']], 'method' => 'delete']) !!}
{!! Form::button('Eliminar', ['type' => 'submit','class'=> 'button-th' ,'onclick' => "return confirm('¿Está seguro?')"]) !!} 
  {!! Form::close() !!}
@endif
  
    </tr>

    @endforeach
</table>
</div>
@endif
@include('footer')
</body>
</html>