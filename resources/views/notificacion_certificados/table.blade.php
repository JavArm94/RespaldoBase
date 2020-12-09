<div class="table-responsive">
    <table class="table" id="notificacionCertificados-table">
        <thead>
            <tr>
                <th>Idcertificado</th>
        <th>Idnotificacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($notificacionCertificados as $notificacionCertificado)
            <tr>
                <td>{{ $notificacionCertificado->idCertificado }}</td>
            <td>{{ $notificacionCertificado->idNotificacion }}</td>
                <td>
                    {!! Form::open(['route' => ['notificacionCertificados.destroy', $notificacionCertificado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('notificacionCertificados.show', [$notificacionCertificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('notificacionCertificados.edit', [$notificacionCertificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
