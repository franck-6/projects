<table class="table table-responsive" id="buildings-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
        <th>State</th>
        <th>Price</th>
        <th>Quality Memory</th>
        <th>Mode Payment</th>
        <th>Observations</th>
        <th>Pool</th>
        <th>Garage</th>
        <th>Outstanding</th>
        <th>Ubication Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($buildings as $building)
        <tr>
            <td>{!! $building->name !!}</td>
            <td>{!! $building->description !!}</td>
            <td>{!! $building->state !!}</td>
            <td>{!! $building->price !!}</td>
            <td>{!! $building->quality_memory !!}</td>
            <td>{!! $building->mode_payment !!}</td>
            <td>{!! $building->observations !!}</td>
            <td>{!! $building->pool !!}</td>
            <td>{!! $building->garage !!}</td>
            <td>{!! $building->outstanding !!}</td>
            <td>{!! $building->ubication_id !!}</td>
            <td>
                {!! Form::open(['route' => ['buildings.destroy', $building->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('buildings.show', [$building->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('buildings.edit', [$building->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>