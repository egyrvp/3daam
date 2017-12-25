<table class="table table-responsive" id="clinics-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Mobile</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clinics as $clinic)
        <tr>
            <td>{!! $clinic->name !!}</td>
            <td>{!! $clinic->address !!}</td>
            <td>{!! $clinic->phone !!}</td>
            <td>{!! $clinic->mobile !!}</td>
            <td>{!! $clinic->email !!}</td>
            <td>
                {!! Form::open(['route' => ['clinics.destroy', $clinic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clinics.show', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clinics.edit', [$clinic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>