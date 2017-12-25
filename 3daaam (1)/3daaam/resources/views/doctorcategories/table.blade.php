<table class="table table-responsive" id="doctorcategories-table">
    <thead>
        <tr>
            <th>Doctor name</th>
        <th>Category Name</th>
        <th>Duration</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($doctorcategories as $doctorcategory)
        <tr>
            <td>{!! $doctorcategory->doctor->name !!}</td>
            <td>{!! $doctorcategory->name !!}</td>
            <td>{!! $doctorcategory->duration !!}</td>
            <td>
                {!! Form::open(['route' => ['doctorcategories.destroy', $doctorcategory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('doctorcategories.show', [$doctorcategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('doctorcategories.edit', [$doctorcategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>