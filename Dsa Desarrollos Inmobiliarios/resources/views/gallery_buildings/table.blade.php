<table class="table table-responsive" id="galleryBuildings-table">
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
    @foreach($galleryBuildings as $galleryBuilding)
        <tr>
            <td>{!! $galleryBuilding->building_id !!}</td>
            <td>{!! $galleryBuilding->name !!}</td>
            <td>{!! $galleryBuilding->image !!}</td>
            <td>{!! $galleryBuilding->orden !!}</td>
            <td>
                {!! Form::open(['route' => ['galleryBuildings.destroy', $galleryBuilding->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('galleryBuildings.show', [$galleryBuilding->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('galleryBuildings.edit', [$galleryBuilding->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>