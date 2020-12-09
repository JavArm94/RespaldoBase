<!-- Tipodedocumento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoDeDocumento', 'Tipodedocumento:') !!}
    {!! Form::text('tipoDeDocumento', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoDocumentos.index') }}" class="btn btn-default">Cancel</a>
</div>
