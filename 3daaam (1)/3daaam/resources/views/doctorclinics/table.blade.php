<table class="table table-responsive" id="doctorclinics-table">
    <thead>
        <tr>
            <th>Doctor Id</th>
        <th>Clinic Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($doctorclinics as $doctorclinic)
        <tr>
            <td>{!! $doctorclinic->doctor->name !!}</td>
            <td>{!! $doctorclinic->clinic->name !!}</td>
            <td>
                {!! Form::open(['route' => ['doctorclinics.destroy', $doctorclinic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('doctorclinics.show', [$doctorclinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('doctorclinics.edit', [$doctorclinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>