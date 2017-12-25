<li class="{{ Request::is('patients*') ? 'active' : '' }}">
    <a href="{!! route('patients.index') !!}"><i class="fa fa-edit"></i><span>Patients</span></a>
</li>

<li class="{{ Request::is('clinics*') ? 'active' : '' }}">
    <a href="{!! route('clinics.index') !!}"><i class="fa fa-edit"></i><span>Clinics</span></a>
</li>

<li class="{{ Request::is('doctors*') ? 'active' : '' }}">
    <a href="{!! route('doctors.index') !!}"><i class="fa fa-edit"></i><span>Doctors</span></a>
</li>





<li class="{{ Request::is('doctorclinics*') ? 'active' : '' }}">
    <a href="{!! route('doctorclinics.index') !!}"><i class="fa fa-edit"></i><span>Doctorclinics</span></a>
</li>
<li class="{{ Request::is('doctorcategories*') ? 'active' : '' }}">
    <a href="{!! route('doctorcategories.index') !!}"><i class="fa fa-edit"></i><span>Doctorcategories</span></a>
</li>


<li class="{{ Request::is('examinations*') ? 'active' : '' }}">
    <a href="{!! route('examinations.index') !!}"><i class="fa fa-edit"></i><span>Examinations</span></a>
</li>


<li class="{{ Request::is('queues*') ? 'active' : '' }}">
    <a href="{!! route('queues.index') !!}"><i class="fa fa-edit"></i><span>Queues</span></a>
</li>

