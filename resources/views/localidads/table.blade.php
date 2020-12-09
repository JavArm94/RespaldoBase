<div class="table-responsive">
    <table class="table" id="localidads-table">
        <thead>
            <tr>
                <th>Nombrelocalidad</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($localidads as $localidad)
            <tr>
                <td>{{ $localidad->nombreLocalidad }}</td>
                <td>
                    {!! Form::open(['route' => ['localidads.destroy', $localidad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('localidads.show', [$localidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('localidads.edit', [$localidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
