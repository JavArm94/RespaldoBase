<div class="table-responsive">
    <table class="table" id="certificados-table">
        <thead>
            <tr>
                <th>Diasdeausencia</th>
        <th>Lugar</th>
        <th>Numerocomprobante</th>
        <th>Fechavencimiento</th>
        <th>Fechacertificado</th>
        <th>Imagen</th>
        <th>Estadocertificado</th>
        <th>Idusuariocertificado</th>
        <th>Idpatologia</th>
        <th>Idmedico</th>
        <th>Idtipocertificado</th>
        <th>Idfamiliar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($certificados as $certificado)
            <tr>
                <td>{{ $certificado->diasDeAusencia }}</td>
            <td>{{ $certificado->lugar }}</td>
            <td>{{ $certificado->numeroComprobante }}</td>
            <td>{{ $certificado->fechaVencimiento }}</td>
            <td>{{ $certificado->fechaCertificado }}</td>
            <td>{{ $certificado->imagen }}</td>
            <td>{{ $certificado->estadoCertificado }}</td>
            <td>{{ $certificado->idUsuarioCertificado }}</td>
            <td>{{ $certificado->idPatologia }}</td>
            <td>{{ $certificado->idMedico }}</td>
            <td>{{ $certificado->idTipoCertificado }}</td>
            <td>{{ $certificado->idFamiliar }}</td>
                <td>
                    {!! Form::open(['route' => ['certificados.destroy', $certificado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('certificados.show', [$certificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('certificados.edit', [$certificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
