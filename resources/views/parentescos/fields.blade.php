<!-- Nombreparentesco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreParentesco', 'Nombreparentesco:') !!}
    {!! Form::text('nombreParentesco', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('parentescos.index') }}" class="btn btn-default">Cancel</a>
</div>
