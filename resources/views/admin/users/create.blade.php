@extends('layouts.admin')


@section('content')

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Create User</a></li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">

                    {!! Form::open(['method'=>'POST', 'action'=>['AdminUsersController@store'],'class'=>['form-valide']]) !!}

                    <div class="form-group row">
                        {!! Form::label('name', 'Name:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                     <div class="form-group row">
                        {!! Form::label('email', 'Email Address:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                     <div class="form-group row">
                        {!! Form::label('role_id', 'Role:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::select('role_id', [''=>'Choose Role'] + $roles , null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                     <div class="form-group row">
                        {!! Form::label('is_active', 'Status:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], 0, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                     <div class="form-group row">
                        {!! Form::label('phone_number', 'Phone No:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::text('phone_number', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>   
                    <div class="form-group row">
                        {!! Form::label('password', 'Password:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}

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