<!-- Nombrepatologia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombrePatologia', 'Nombrepatologia:') !!}
    {!! Form::text('nombrePatologia', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('patologias.index') }}" class="btn btn-default">Cancel</a>
</div>
