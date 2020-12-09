<div>
    Usuario: {{$usuario->apellido. ',' . $usuario->nombreUsuario  }}
    <br>
    e-mail:  {{$usuario->correoElectronico}}
</div>
<div class="table-responsive">
    <table class="table" id="certificados-table">
        <thead>
            <tr>
                <th>Fecha Certificado</th>
                <th>Médico</th>
                <th>Patología</th>
                <th>Fecha de Vencimiento</th>
                <th>Otro</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuario->certificados as $certificado)
            <tr>
                <td> {{ $certificado->fechaCertificado }}</td>
                <td> {{ $certificado->medico->apellido . ','.  $certificado->medico->nombres }}</td> 
                <td> {{ $certificado->patologia->nombrePatologia }} </td> 
                <td> {{ $certificado->fechaVencimiento }}</td>
                <td>  Otro              </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
