<table class="table table-responsive" id="leadParameters-table">
    <thead>
        <tr>
            <th>Advancedpayment Firstoption</th>
        <th>Advancedpayment Secondoption</th>
        <th>Advancedpayment Thirdoption</th>
        <th>Feemonth Firstoption</th>
        <th>Feemonth Secondoption</th>
        <th>Feemonth Thirdoption</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($leadParameters as $leadParameters)
        <tr>
            <td>{!! $leadParameters->advancedpayment_firstoption !!}</td>
            <td>{!! $leadParameters->advancedpayment_secondoption !!}</td>
            <td>{!! $leadParameters->advancedpayment_thirdoption !!}</td>
            <td>{!! $leadParameters->feemonth_firstoption !!}</td>
            <td>{!! $leadParameters->feemonth_secondoption !!}</td>
            <td>{!! $leadParameters->feemonth_thirdoption !!}</td>
            <td>
                {!! Form::open(['route' => ['leadParameters.destroy', $leadParameters->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('leadParameters.show', [$leadParameters->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('leadParameters.edit', [$leadParameters->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>