<table class="table table-responsive" id="examinations-table">
    <thead>
        <tr>
            <th>Patient Id</th>
        <th>Doctorclinic Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Actual Start Time</th>
        <th>Actual End Time</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($examinations as $examination)
        <tr>
            <td>{!! $examination->patient_id !!}</td>
            <td>{!! $examination->doctorclinic_id !!}</td>
            <td>{!! $examination->start_date !!}</td>
            <td>{!! $examination->end_date !!}</td>
            <td>{!! $examination->start_time !!}</td>
            <td>{!! $examination->end_time !!}</td>
            <td>{!! $examination->actual_start_time !!}</td>
            <td>{!! $examination->actual_end_time !!}</td>
            <td>{!! $examination->status !!}</td>
            <td>
                {!! Form::open(['route' => ['examinations.destroy', $examination->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('examinations.show', [$examination->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('examinations.edit', [$examination->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>