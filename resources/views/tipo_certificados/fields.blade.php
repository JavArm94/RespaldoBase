<!-- Tipocertificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoCertificado', 'Tipocertificado:') !!}
    {!! Form::text('tipoCertificado', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Ctdfaltasanualesjustificadas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ctdFaltasAnualesJustificadas', 'Ctdfaltasanualesjustificadas:') !!}
    {!! Form::number('ctdFaltasAnualesJustificadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Solicitafamiliar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solicitaFamiliar', 'Solicitafamiliar:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('solicitaFamiliar', 0) !!}
        {!! Form::checkbox('solicitaFamiliar', '1', null) !!}
    </label>
</div>


<!-- Diaspresentacionvencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('diasPresentacionVencimiento', 'Diaspresentacionvencimiento:') !!}
    {!! Form::number('diasPresentacionVencimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tipoCertificados.index') }}" class="btn btn-default">Cancel</a>
</div>
