<table class="table table-responsive" id="doctors-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Birthdate</th>
        <th>Ssn</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Department</th>
        <th>Specialty</th>
        <th>Degree</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($doctors as $doctor)
        <tr>
            <td>{!! $doctor->name !!}</td>
            <td>{!! $doctor->birthdate !!}</td>
            <td>{!! $doctor->ssn !!}</td>
            <td>{!! $doctor->gender !!}</td>
            <td>{!! $doctor->address !!}</td>
            <td>{!! $doctor->phone !!}</td>
            <td>{!! $doctor->email !!}</td>
            <td>{!! $doctor->department !!}</td>
            <td>{!! $doctor->specialty !!}</td>
            <td>{!! $doctor->degree !!}</td>
            <td>
                {!! Form::open(['route' => ['doctors.destroy', $doctor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('doctors.show', [$doctor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('doctors.edit', [$doctor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>