<table class="table table-responsive" id="leads-table">
    <thead>
        <tr>
            <th>Room</th>
        <th>State</th>
        <th>Advance Payment</th>
        <th>Fee Month</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($leads as $lead)
        <tr>
            <td>{!! $lead->room !!}</td>
            <td>{!! $lead->state !!}</td>
            <td>{!! $lead->advance_payment !!}</td>
            <td>{!! $lead->fee_month !!}</td>
            <td>
                {!! Form::open(['route' => ['leads.destroy', $lead->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('leads.show', [$lead->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('leads.edit', [$lead->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>