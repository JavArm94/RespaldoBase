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
                <th>Nombres</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuario->certificados as $certificado)
            <tr>
                <td> {{ $certificado->fechaCertificado }}</td>
                <td> {{ $certificado->medico->apellido . ','.  $certificado->medico->nombres }}</td> 
                <td> {{ $certificado->medico->nombres }} </td> 
                <td> {{ $certificado->patologia->nombrePatologia }} </td> 
                <td> {{ $certificado->fechaCertificado }}</td>
                <td>
                    {{-- {!! Form::open(['route' => ['certificados.destroy', $certificado->id], 'method' => 'delete']) !!} --}}
                    <div class='btn-group'>
                        {{-- <a href="{{ route('certificados.show', [$certificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                        {{-- <a href="{{ route('certificados.edit', [$certificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
