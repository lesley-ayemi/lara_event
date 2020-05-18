@extends('layouts.admin')

@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Categories</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Category</a></li>
        </ol>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">

                        {!! Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}
                            
                            <div class="form-group row">
                                {!! Form::label('name', 'Update Category:', ['class'=>'col-lg-4 col-form-label']) !!}
                                <div class="col-lg-6">
                                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>
                        
                        {!! Form::close() !!}

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection