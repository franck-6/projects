<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Quality Memory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quality_memory', 'Quality Memory:') !!}
    {!! Form::text('quality_memory', null, ['class' => 'form-control']) !!}
</div>

<!-- Mode Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_payment', 'Mode Payment:') !!}
    {!! Form::text('mode_payment', null, ['class' => 'form-control']) !!}
</div>

<!-- Observations Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observations', 'Observations:') !!}
    {!! Form::text('observations', null, ['class' => 'form-control']) !!}
</div>

<!-- Pool Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pool', 'Pool:') !!}
    {!! Form::text('pool', null, ['class' => 'form-control']) !!}
</div>

<!-- Garage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('garage', 'Garage:') !!}
    {!! Form::text('garage', null, ['class' => 'form-control']) !!}
</div>

<!-- Outstanding Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outstanding', 'Outstanding:') !!}
    {!! Form::text('outstanding', null, ['class' => 'form-control']) !!}
</div>

<!-- Ubication Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ubication_id', 'Ubication Id:') !!}
    {!! Form::number('ubication_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('buildings.index') !!}" class="btn btn-default">Cancel</a>
</div>
