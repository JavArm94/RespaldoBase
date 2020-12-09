@extends('layouts.app') 
@section('content') 

</body>
</html>
    <h1>
        Médico: {{ $medico->apellido .', ' . $medico->nombres .', ' . $contador}}
    </h1>
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2">Fecha inicial
            <div class="form-group">           
             <input wire:model.lazy="fecha_ini" 
              wire:click="sumar"
              wire:keydown.enter="sumar"
             class="form-control flatpickr flatpickr-input active" type="text" placeholder="Haz click">
           </div>
         </div>
    
        <div class="col-sm-12 col-md-2 col-lg-2 text-left">
           <div class="form-group">Fecha final
      <input wire:model.lazy="fecha_fin" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Haz click">
           </div>
       </div>
    </div>
        
    <div class="table-responsive">
        <table class="table" id="certificados-table">
            <thead>
                <tr>
                    <th>Titular</th>
                    <th>Fecha</th>
                    <th>Patología</th>
                    <th>Días de ausencia</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            @foreach($certificados as $certificado)
                <tr>
                    <td> {{ $certificado->usuario->nombreUsuario .' '. $certificado->usuario->apellido}}</td> 
                    <td> {{ $certificado->fechaCertificado }}</td>
                    <td> {{ $certificado->patologia->nombrePatologia }} </td> 
                    <td> {{ $certificado->diasDeAusencia }}</td>
                    <td> {{ $certificado->estadoCertificado }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div> 

@endsection


    



