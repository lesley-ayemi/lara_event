@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">

                        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'class'=>['form-valide']]) !!}

                        <div class="form-group row">

                        {!! Form::label('name', 'Name:', ['class'=>'col-lg-4 col-form-label']) !!}
                        <div class="col-lg-6">
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
    
                            </div>
                        </div>


                        <div class="form-group row">

                            {!! Form::label('email', 'Email:', ['class'=>'col-lg-4 col-form-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::text('email', null, ['class'=>'form-control']) !!}
        
                                </div>
                            </div>


                        <div class="form-group row">

                            {!! Form::label('role_id', 'Roles:', ['class'=>'col-lg-4 col-form-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
        
                                </div>
                            </div>
                            

                        <div class="form-group row">

                            {!! Form::label('is_active', 'Status:', ['class'=>'col-lg-4 col-form-label']) !!}
                            <div class="col-lg-6">
                                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
        
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
                                    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
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