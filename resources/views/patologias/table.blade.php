<div class="table-responsive">
    <table class="table" id="patologias-table">
        <thead>
            <tr>
                <th>Nombrepatologia</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patologias as $patologia)
            <tr>
                <td>{{ $patologia->nombrePatologia }}</td>
                <td>
                    {!! Form::open(['route' => ['patologias.destroy', $patologia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patologias.show', [$patologia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patologias.edit', [$patologia->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
