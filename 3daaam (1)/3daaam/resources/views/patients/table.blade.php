<table class="table table-responsive" id="patients-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Ssn</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>City</th>
        <th>Address</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)
        <tr>
            <td>{!! $patient->name !!}</td>
            <td>{!! $patient->ssn !!}</td>
            <td>{!! $patient->birthdate !!}</td>
            <td>{!! $patient->gender !!}</td>
            <td>{!! $patient->phone !!}</td>
            <td>{!! $patient->city !!}</td>
            <td>{!! $patient->address !!}</td>
            <td>
                {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('patients.show', [$patient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('patients.edit', [$patient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>