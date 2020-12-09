<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
                <th>Legajo</th>
        <th>Apellido</th>
        <th>Nombreusuario</th>
        <th>Contrasenausuario</th>
        <th>Fechanacimiento</th>
        <th>Direccion</th>
        <th>Correoelectronico</th>
        <th>Numerodocumento</th>
        <th>Estadobaja</th>
        <th>Idcargo</th>
        <th>Idlocalidad</th>
        <th>Idtipodocumento</th>
        <th>Idtipousuario</th>
        <th>Idrol</th>
        <th>Idgenero</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->legajo }}</td>
            <td>{{ $usuario->apellido }}</td>
            <td>{{ $usuario->nombreUsuario }}</td>
            <td>{{ $usuario->contrasenaUsuario }}</td>
            <td>{{ $usuario->fechaNacimiento }}</td>
            <td>{{ $usuario->direccion }}</td>
            <td>{{ $usuario->correoElectronico }}</td>
            <td>{{ $usuario->numeroDocumento }}</td>
            <td>{{ $usuario->estadoBaja }}</td>
            <td>{{ $usuario->idCargo }}</td>
            <td>{{ $usuario->idLocalidad }}</td>
            <td>{{ $usuario->idTipoDocumento }}</td>
            <td>{{ $usuario->idTipoUsuario }}</td>
            <td>{{ $usuario->idRol }}</td>
            <td>{{ $usuario->idGenero }}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('usuarios.edit', [$usuario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
