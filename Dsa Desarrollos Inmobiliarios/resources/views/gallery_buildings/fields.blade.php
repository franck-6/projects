<!-- Building Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('building_id', 'Building Id:') !!}
    {!! Form::number('building_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Orden Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orden', 'Orden:') !!}
    {!! Form::number('orden', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('galleryBuildings.index') !!}" class="btn btn-default">Cancel</a>
</div>
