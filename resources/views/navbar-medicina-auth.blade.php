<link rel="stylesheet" href="{{ asset('css/navbar-auth.css') }}">
<div class="navbar">
    <a class="navbar-brand" href="{{ url('/usuario') }}">
       MedicLab </a> 
    <hr> 
    <p>Sistema de gestión médica</p> 
    <a href="{{ url('certificados/ingresarCertificado') }}" style="padding:0px">  <img class="icon" src="{{ asset('icons/add_certificado.png') }}" alt=""> </a>
   <img class="icon" src="{{ asset('icons/gear-icon.png') }}" alt=""> 
 
    <div class="logout">
      <a href="{{ url('/logout') }}" class="logout-btn"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar sesión
        </a> 
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            @csrf
        </form></div>
    </div>