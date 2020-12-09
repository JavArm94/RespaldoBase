<div class="table-responsive">
    <table class="table" id="tipoCertificados-table">
        <thead>
            <tr>
                <th>Tipocertificado</th>
        <th>Ctdfaltasanualesjustificadas</th>
        <th>Solicitafamiliar</th>
        <th>Diaspresentacionvencimiento</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tipoCertificados as $tipoCertificado)
            <tr>
                <td>{{ $tipoCertificado->tipoCertificado }}</td>
            <td>{{ $tipoCertificado->ctdFaltasAnualesJustificadas }}</td>
            <td>{{ $tipoCertificado->solicitaFamiliar }}</td>
            <td>{{ $tipoCertificado->diasPresentacionVencimiento }}</td>
                <td>
                    {!! Form::open(['route' => ['tipoCertificados.destroy', $tipoCertificado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoCertificados.show', [$tipoCertificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tipoCertificados.edit', [$tipoCertificado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
