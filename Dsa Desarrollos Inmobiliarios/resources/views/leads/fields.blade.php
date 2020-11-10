<!-- Room Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room', 'Room:') !!}
    {!! Form::text('room', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- Advance Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advance_payment', 'Advance Payment:') !!}
    {!! Form::text('advance_payment', null, ['class' => 'form-control']) !!}
</div>

<!-- Fee Month Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee_month', 'Fee Month:') !!}
    {!! Form::text('fee_month', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('leads.index') !!}" class="btn btn-default">Cancel</a>
</div>
