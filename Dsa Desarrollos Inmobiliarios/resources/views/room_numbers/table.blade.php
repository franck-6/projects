<table class="table table-responsive" id="roomNumbers-table">
    <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($roomNumbers as $roomNumber)
        <tr>
            <td>{!! $roomNumber->name !!}</td>
            <td>
                {!! Form::open(['route' => ['roomNumbers.destroy', $roomNumber->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('roomNumbers.show', [$roomNumber->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('roomNumbers.edit', [$roomNumber->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>