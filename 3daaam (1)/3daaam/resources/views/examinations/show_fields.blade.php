<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $examination->id !!}</p>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    <p>{!! $examination->patient_id !!}</p>
</div>



<!-- Doctorclinic Id Field -->
<div class="form-group">
    {!! Form::label('doctorclinic_id', 'Doctorclinic Id:') !!}
    <p>{!! $examination->doctorclinic_id !!}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{!! $examination->start_date !!}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{!! $examination->end_date !!}</p>
</div>

<!-- Start Time Field -->
<div class="form-group">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{!! $examination->start_time !!}</p>
</div>

<!-- End Time Field -->
<div class="form-group">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{!! $examination->end_time !!}</p>
</div>

<!-- Actual Start Time Field -->
<div class="form-group">
    {!! Form::label('actual_start_time', 'Actual Start Time:') !!}
    <p>{!! $examination->actual_start_time !!}</p>
</div>

<!-- Actual End Time Field -->
<div class="form-group">
    {!! Form::label('actual_end_time', 'Actual End Time:') !!}
    <p>{!! $examination->actual_end_time !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $examination->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $examination->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $examination->updated_at !!}</p>
</div>

