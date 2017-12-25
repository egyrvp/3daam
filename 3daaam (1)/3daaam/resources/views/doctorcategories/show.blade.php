@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Doctorcategory
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('doctorcategories.show_fields')
                    <a href="{!! route('doctorcategories.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
