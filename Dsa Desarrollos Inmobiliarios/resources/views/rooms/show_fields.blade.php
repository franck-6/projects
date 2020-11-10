<!-- Room Number Id Field -->
<div class="form-group">
    {!! Form::label('room_number_id', 'Room Number Id:') !!}
    <p>{!! $room->room_number_id !!}</p>
</div>

<!-- Building Id Field -->
<div class="form-group">
    {!! Form::label('building_id', 'Building Id:') !!}
    <p>{!! $room->building_id !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $room->description !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $room->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $room->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $room->deleted_at !!}</p>
</div>

