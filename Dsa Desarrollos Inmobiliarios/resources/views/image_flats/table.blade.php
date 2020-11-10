<table class="table table-responsive" id="imageFlats-table">
    <thead>
        <tr>
            <th>Building Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>Orden</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($imageFlats as $imageFlat)
        <tr>
            <td>{!! $imageFlat->building_id !!}</td>
            <td>{!! $imageFlat->name !!}</td>
            <td>{!! $imageFlat->image !!}</td>
            <td>{!! $imageFlat->orden !!}</td>
            <td>
                {!! Form::open(['route' => ['imageFlats.destroy', $imageFlat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('imageFlats.show', [$imageFlat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('imageFlats.edit', [$imageFlat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>