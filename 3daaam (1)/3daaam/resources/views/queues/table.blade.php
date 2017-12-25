<table class="table table-responsive" id="queues-table">
    <thead>
        <tr>
            <th>Examination Id</th>
        <th>Patient Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Start Time</th>
        <th>End Time</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($queues as $queue)
        <tr>
            <td>{!! $queue->examination_id !!}</td>
            <td>{!! $queue->patient_id !!}</td>
            <td>{!! $queue->start_date !!}</td>
            <td>{!! $queue->end_date !!}</td>
            <td>{!! $queue->start_time !!}</td>
            <td>{!! $queue->end_time !!}</td>
            <td>
                {!! Form::open(['route' => ['queues.destroy', $queue->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('queues.show', [$queue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('queues.edit', [$queue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>