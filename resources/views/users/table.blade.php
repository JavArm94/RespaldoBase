<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Legajo</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Nombreusuario</th>
        <th>Password</th>
        <th>Remember Token</th>
        <th>Fechanacimiento</th>
        <th>Direccion</th>
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
        @foreach($users as $user)
            <tr>
                <td>{{ $user->legajo }}</td>
            <td>{{ $user->apellido }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->email_verified_at }}</td>
            <td>{{ $user->nombreUsuario }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->remember_token }}</td>
            <td>{{ $user->fechaNacimiento }}</td>
            <td>{{ $user->direccion }}</td>
            <td>{{ $user->numeroDocumento }}</td>
            <td>{{ $user->estadoBaja }}</td>
            <td>{{ $user->idCargo }}</td>
            <td>{{ $user->idLocalidad }}</td>
            <td>{{ $user->idTipoDocumento }}</td>
            <td>{{ $user->idTipoUsuario }}</td>
            <td>{{ $user->idRol }}</td>
            <td>{{ $user->idGenero }}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
