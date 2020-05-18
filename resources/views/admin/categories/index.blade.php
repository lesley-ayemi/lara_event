@extends('layouts.admin')

@section('content')

                    <!-- /# column -->
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>All Categories</h4>
                                    </div>
                                    <div class="table-responsive">

                                        {{-- Create category modal  --}}
                                        <div class="bootstrap-modal">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Create Category</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="basicModal">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Create New Category</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {!! Form::open(['method'=>'POST', 'action'=>['AdminCategoriesController@store'],'class'=>['form-valide']]) !!}

                                                            <div class="form-group">
                                                            {!! Form::label('name', 'New category:', ['class'=>'col-lg-4 col-form-label']) !!}
                                                            <div class="col-lg-12">

                                                            {!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}
                                                            </div>
                                                            </div>

                                                                @if (count($errors) > 0)
                                                            <div class="alert alert-warning">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                                            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
                                                        </div>
                                                        {!! Form::close() !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Modal End  --}}

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Created</th>
                                                    <th>Modified</th>
                                                    {{-- <th>Author</th> --}}
                                                    <th>Edit/Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
    
                                                <tr>
                                                        
                                                    <th>{{$category->id}}</th>
                                                    {{-- <td><img height="50" src="{{$post->photo->file ? $post->photo->file : null}}"></td> --}}
                                                    {{-- <td><span class="badge badge-primary px-2">{{$post->user->name}}</span></td> --}}
                                                    <td><span class="badge badge-primary px-2">{{$category->name}}</span></td>
                                                    {{-- <td class="color-primary">{{$post->body}}</td> --}}
                                                    {{-- <td><span class="badge badge-danger px-2">{{$post->category->name}}</span> --}}
                                                    <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No Date'}}</td>
                                                    <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'No Date'}}</td>
                                                    {{-- <td>
                                                        <a class="badge badge-success px-2" href="">
                                                            Click Here
                                                            <i style="color: blue" class="fa fa-arrow-left"></i>
                                                        </a>
                                                    </td> --}}
                                                    {{-- <td><span class="badge badge-danger px-2">{{$category->category->user_id ? $category->category->user_id : 'No Author'}}</span> --}}

                                                    <td>
                                                    <a href="{{route('categories.edit', $category->id)}}">
                                                        <i style="color: red" class="fa fa-edit fa-lg"></i>
                                                    </a>
                                                    /
                                                    <a href="{{route('categories.edit',$category->id)}}">
                                                        <i style="color: black" class="fa fa-trash fa-lg"></i>
                                                    </a>
                                                    </td>
    
                                                </tr>
                                                @endforeach
    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- /# column -->
    
@endsection