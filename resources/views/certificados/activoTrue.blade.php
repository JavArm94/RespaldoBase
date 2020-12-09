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
         <link rel="stylesheet" href="{{asset('css/certificados/show_certificados.css')}}">
        <title>Document</title>
    </head>
    <body>            
        <div class="content" style="font-size:40px !important;padding-bottom: 80px;padding-top: 200px">Usted posee un certificado activo. 
        <br><br> <br>   
        <a href="{{ url('/certificados/mostrar_certificados_justificados') }}"><button href="" type="button" class="button" >Ver </button></a>
        <a href="{{ url('/usuario') }}"><button href="" type="button" class="button" >Regresar</button></a> 
            </div>
     
    </body>
    </html>@include('footer')