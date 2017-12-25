<!-- Name Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" title="ادخل الاسم">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Ssn Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" title=" ادخل الرقم القومي">
    {!! Form::label('ssn', 'Ssn:') !!}
    {!! Form::text('ssn', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" title="ادخل تاريخ الميلاد">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12" data-toggle="tooltip" title="ادخل النوع">
    {!! Form::label('gender', 'Gender:') !!}
    <label class="radio-inline">
        {!! Form::radio('gender', "Male", null) !!} Male
    </label>

    <label class="radio-inline">
        {!! Form::radio('gender', "Female", null) !!} Female
    </label>

</div>

<!-- Phone Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" title="ادخل رقم الهاتف">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" title="ادخل المدينه">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6" data-toggle="tooltip" title="ادخل العنوان">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('patients.index') !!}" class="btn btn-default">Cancel</a>
</div>
