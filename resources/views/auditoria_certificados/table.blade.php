<div class="table-responsive">
    <table class="table" id="auditoriaCertificados-table">
        <thead>
            <tr>
                <th>Fechamodificacion</th>
        <th>Horamodificacion</th>
        <th>Tipomodificacion</th>
        <th>Diasdeausencia</th>
        <th>Numerocomprobante</th>
        <th>Fechavencimiento</th>
        <th>Fechacertificado</th>
        <th>Imagen</th>
        <th>Estadocerficado</th>
        <th>Idusuariocertificado</th>
        <th>Idusuarioquemodifica</th>
        <th>Idpatologia</th>
        <th>Idmedico</th>
        <th>Idtipocertificado</th>
        <th>Idfamiliar</th>
        <th>Idcertificado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($auditoriaCertificados as $auditoriaCertificado)
            <tr>
                <td>{{ $auditoriaCertificado->fechaModificacion }}</td>
            <td>{{ $auditoriaCertificado->horaModificacion }}</td>
            <td>{{ $auditoriaCertificado->tipoModificacion }}</td>
            <td>{{ $auditoriaCertificado->diasDeAusencia }}</td>
            <td>{{ $auditoriaCertificado->numeroComprobante }}</td>
            <td>{{ $auditoriaCertificado->fechaVencimiento }}</td>
            <td>{{ $auditoriaCertificado->fechaCertificado }}</td>
            <td>{{ $auditoriaCertificado->imagen }}</td>
            <td>{{ $auditoriaCertificado->estadoCerficado }}</td>
            <td>{{ $auditoriaCertificado->idUsuarioCertificado }}</td>
            <td>{{ $auditoriaCertificado->idUsuarioQueModifica }}</td>
            <td>{{ $auditoriaCertificado->idPatologia }}</td>
            <td>{{ $auditoriaCertificado->idMedico }}</td>
            <td>{{ $auditoriaCertificado->idTipoCertificado }}</td>
            <td>{{ $auditoriaCertificado->idFamiliar }}</td>
            <td>{{ $auditoriaCertificado->idCertificado }}</td>
                <td>
                    {!! Form::open(['route' => ['auditoriaCertificados.destroy', $auditoriaCertificado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('auditoriaCertificados.show', [$auditoriaCertificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('auditoriaCertificados.edit', [$auditoriaCertificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
