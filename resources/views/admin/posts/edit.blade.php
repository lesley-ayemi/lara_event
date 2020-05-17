@extends('layouts.admin')


@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Post</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Post</a></li>
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

                    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id],'class'=>['form-valide'], 'files'=>true]) !!}

            
                    <div class="form-group row">
                        {!! Form::label('title', 'Title:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                     <div class="form-group row">
                        {!! Form::label('category_id', 'Select Category:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::select('category_id', ['' => 'Choose Category'] + $categories, null, ['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('body', 'Post Image:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        <img height="90" class="img-fluid img-thumbnail" src="{{$post->photo->file}}" alt="">
                        </div>
                    </div>

                     <div class="form-group row">
                        {!! Form::label('body', 'Content:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                     <div class="form-group row">
                        {!! Form::label('photo_id', 'Change :', ['class'=>'col-lg-4 col-form-label']) !!}

                        <div class="col-lg-6">
                        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                        
                        </div>
                    </div>   
                            {{-- <div class="form-group row">
                                {!! Form::label('password', 'Password:', ['class'=>'col-lg-4 col-form-label']) !!}
                                <div class="col-lg-6">
                                {!! Form::password('password', ['class'=>'form-control']) !!}
                                </div>
                            </div> --}}
                    

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}

                        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$post->id], 'files'=>[true]]) !!}


                        <div class="form-group row">
                            <div class="col-lg-8 ml-auto">

                                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
                                
                            </div>

                        {!! Form::close() !!}

                        </div>

                    </div>
                    
                    @if (count($errors) > 0)

                    <div class="alert alert-danger">
                    
                        <ul>
                            @foreach ($errors->all() as $error)
                    
                        <li>{{$error}}</li>
                                
                            @endforeach
                        </ul>
                    
                    </div>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection