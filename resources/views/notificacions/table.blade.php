<div class="table-responsive">
    <table class="table" id="notificacions-table">
        <thead>
            <tr>
                <th>Informacion</th>
        <th>Tiponotificacion</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Fechanotificacion</th>
        <th>Idtipousuariodestinatario</th>
        <th>Idusuariodestinatario</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($notificacions as $notificacion)
            <tr>
                <td>{{ $notificacion->informacion }}</td>
            <td>{{ $notificacion->tipoNotificacion }}</td>
            <td>{{ $notificacion->fecha }}</td>
            <td>{{ $notificacion->hora }}</td>
            <td>{{ $notificacion->fechaNotificacion }}</td>
            <td>{{ $notificacion->idTipoUsuarioDestinatario }}</td>
            <td>{{ $notificacion->idUsuarioDestinatario }}</td>
                <td>
                    {!! Form::open(['route' => ['notificacions.destroy', $notificacion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('notificacions.show', [$notificacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('notificacions.edit', [$notificacion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
