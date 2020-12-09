<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Fechanacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaNacimiento', 'Fechanacimiento:') !!}
    {!! Form::text('fechaNacimiento', null, ['class' => 'form-control','id'=>'fechaNacimiento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechaNacimiento').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Idusuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idUsuario', 'Idusuario:') !!}
    {!! Form::number('idUsuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Idparentesco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idParentesco', 'Idparentesco:') !!}
    {!! Form::number('idParentesco', null, ['class' => 'form-control']) !!}
</div>

<!-- Idgenero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idGenero', 'Idgenero:') !!}
    {!! Form::number('idGenero', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('familiars.index') }}" class="btn btn-default">Cancel</a>
</div>
