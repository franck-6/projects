<!-- Advancedpayment Firstoption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advancedpayment_firstoption', 'Advancedpayment Firstoption:') !!}
    {!! Form::number('advancedpayment_firstoption', null, ['class' => 'form-control']) !!}
</div>

<!-- Advancedpayment Secondoption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advancedpayment_secondoption', 'Advancedpayment Secondoption:') !!}
    {!! Form::number('advancedpayment_secondoption', null, ['class' => 'form-control']) !!}
</div>

<!-- Advancedpayment Thirdoption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advancedpayment_thirdoption', 'Advancedpayment Thirdoption:') !!}
    {!! Form::number('advancedpayment_thirdoption', null, ['class' => 'form-control']) !!}
</div>

<!-- Feemonth Firstoption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feemonth_firstoption', 'Feemonth Firstoption:') !!}
    {!! Form::number('feemonth_firstoption', null, ['class' => 'form-control']) !!}
</div>

<!-- Feemonth Secondoption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feemonth_secondoption', 'Feemonth Secondoption:') !!}
    {!! Form::number('feemonth_secondoption', null, ['class' => 'form-control']) !!}
</div>

<!-- Feemonth Thirdoption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feemonth_thirdoption', 'Feemonth Thirdoption:') !!}
    {!! Form::number('feemonth_thirdoption', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('leadParameters.index') !!}" class="btn btn-default">Cancel</a>
</div>
