@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doctorcategory
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($doctorcategory, ['route' => ['doctorcategories.update', $doctorcategory->id], 'method' => 'patch']) !!}

                        @include('doctorcategories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection