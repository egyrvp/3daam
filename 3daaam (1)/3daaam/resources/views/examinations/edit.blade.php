@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Examination
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($examination, ['route' => ['examinations.update', $examination->id], 'method' => 'patch']) !!}

                        @include('examinations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection