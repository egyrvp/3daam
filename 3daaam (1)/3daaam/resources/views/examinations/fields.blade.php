<!-- Patient Id Field -->

<div class="form-group col-sm-6">
    {!! Form::label('patient_id', 'Patient Id:') !!}
    {!! Form::text('patient_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Doctorclinic Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('doctorclinic_id', 'Doctorclinic Id:') !!}
    {!! Form::text('doctorclinic_id', null, ['class' => 'form-control']) !!}
</div>

            <div class="col-md-6">
                 <div class="form-group">
                <label>نوع الكشف </label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">كشف عادى</option>
                  <option>اعـاده</option>
                  <option>اسـتـشاره</option>
                 
                </select>
              </div>
              <div class="form-group">
                <label>نوع الشـكوى  </label>
                <select class="form-control select2" multiple="multiple" data-placeholder="اخـتـار" style="width: 100%;">
                  <option>ورم</option>
                  <option>كسر</option>
                  <option>الم</option>
                  <option>كدمه</option>
                  <option>عمود فقرى</option>
                  <option>عدم القدره على المشى </option>
             
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">

                <label>التـاريخ:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
            </div>

		   <div>
 
          من فضلك اضغط هنا للحجز  <a href="https://select2.github.io/">Select2 documentation</a> 
        </div>	
			
<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::text('start_time', null, ['class' => 'form-control']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Actual Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('actual_start_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Actual End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('actual_end_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">

	
	<input type='hidden' name='status' class='form-control' value='Not Started' />
   
</div>

<div id="app1">
       <div class="col-md-3 col-sm-6">
        <div class="card-box">
            <h2>Reports</h2><br>
            <ul>
                <label value="ay 7aga" action="null" @click="setComponent('daily')">Show Queue</label>

            </ul>
        </div>
    </div>
    <div class="col-md-9 col-sm-6">
        <div class="card-box main">
            <component v-bind:is="currentComponent"></component>
        </div>
    </div>
</div>
<div id='eeee'>
<div>
<taskdata>
</taskdata>
</div>

<template id='queuelist'>
<ul class="list-group">
<li class="list-group-item" v-for="singleRecord in datalist">
@{{singleRecord.start_date}}
</li>
</ul>
</template>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('examinations.index') !!}" class="btn btn-default">Cancel</a>
</div>
<!-- Select2 -->
