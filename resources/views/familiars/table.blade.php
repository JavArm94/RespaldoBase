<div class="table-responsive">
    <table class="table" id="familiars-table">
        <thead>
            <tr>
                <th>Apellido</th>
        <th>Nombres</th>
        <th>Fechanacimiento</th>
        <th>Idusuario</th>
        <th>Idparentesco</th>
        <th>Idgenero</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($familiars as $familiar)
            <tr>
                <td>{{ $familiar->apellido }}</td>
            <td>{{ $familiar->nombres }}</td>
            <td>{{ $familiar->fechaNacimiento }}</td>
            <td>{{ $familiar->idUsuario }}</td>
            <td>{{ $familiar->idParentesco }}</td>
            <td>{{ $familiar->idGenero }}</td>
                <td>
                    {!! Form::open(['route' => ['familiars.destroy', $familiar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('familiars.show', [$familiar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('familiars.edit', [$familiar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
