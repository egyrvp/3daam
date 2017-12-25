@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doctorclinic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($doctorclinic, ['route' => ['doctorclinics.update', $doctorclinic->id], 'method' => 'patch']) !!}

                        @include('doctorclinics.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection