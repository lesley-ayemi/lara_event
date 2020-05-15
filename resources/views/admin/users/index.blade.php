@extends('layouts.admin')


@section('content')




<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Status</th>
                                    <th>Phone Number</th>
                                    <th>Registered Date</th>
                                    <th>Updated At</th>
                                    <th>Edit/Delete</th>
                                </tr>
                            </thead>
                            @if ($users)

                            @foreach ($users as $user)

                            <tbody>
                                        
                                <tr>
                                <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->name ? $user->role->name : 'NO Role'}}</td>
                                    <td>{{$user->is_active == 1 ? 'Active': 'Not Active'}}</td>
                                    <td> <span>+234</span> {{$user->phone_number}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>{{$user->updated_at->diffForHumans()}}</td>
                                    <td>
                                    <a href="{{route('admin.users.edit', $user->id)}}">
                                    <i class="fa fa-edit text-red fa-lg"></i>
                                    </a>
                                    /
                                    {{-- @if ($users) --}}
                                        

                                    {{-- @foreach ($users as $user ) --}}

                                    {{-- <a href="#myModal" class="trigger-btn" data-toggle="modal"> --}}
                                    <a href="{{route('admin.users.edit', $user->id)}}">

                                    <i  class="fa fa-trash text-dark fa-lg"></i>
                                    </a>
                                    {{-- @endif --}}

                                    {{-- @endforeach --}}

                                    {{-- <button class="btn btn-warning btn sweet-success-cancel">
                                        <i class="fa fa-trash text-dark fa-lg"></i>

                                    </button> --}}

                                    <!-- Modal HTML Start-->

                                    <div id="myModal" class="modal fade"  >

                                        <div class="modal-dialog modal-confirm">

                                            <div class="modal-content">
                                                <div class="modal-header">			
                                                    <h4 class="modal-title">Are you sure?</h4>	
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                {{-- @if ($users) --}}

                                                    
                                                    
                                                <div class="modal-body text-center">
                                                    <i style="color: yellow" class="fa fa-warning fa-3x"></i>
                                                <p class="text-dark">Do You Really Want To Delete <span>{{$user->name}}</span> ?</p>
                                                </div>
                                                <div class="modal-footer">

                                                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}
                                                    
                                                    {!! Form::submit('Cancel', ['class'=>'btn btn-info', 'data-dismiss'=>'modal']) !!}
                                                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                                    {!! Form::close() !!}
                                                </div>

                                                {{-- @endif --}}

                                            </div>

                                        </div>
                                        
                                    </div> 

                                    <!-- Modal HTML End-->

                                    
                                    </td>
                                </tr>

                            
                            </tbody>
                            @endforeach

                            @endif

                        </table>
                        <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                            {{$users->render()}}
                         </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
    
@endsection