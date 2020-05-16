@extends('layouts.admin')


@section('content')

                    <!-- /# column -->
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>All Post</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Photo</th>
                                                <th>User</th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>Category</th>
                                                <th>Publised</th>
                                                <th>Modified</th>
                                                <th>View Post</th>
                                                <th>Edit/Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)

                                            <tr>
                                                    
                                                <th>{{$post->id}}</th>
                                                <td><img height="50" src="{{$post->photo->file ? $post->photo->file : null}}"></td>
                                                <td><span class="badge badge-primary px-2">{{$post->user->name}}</span></td>
                                                <td>{{$post->title}}</td>
                                                <td class="color-primary">{{$post->body}}</td>
                                                <td><span class="badge badge-danger px-2">{{$post->category->name}}</span>
                                                <td>{{$post->created_at ? $post->created_at->diffForHumans() : 'No Date'}}</td>
                                                <td>{{$post->updated_at ? $post->updated_at->diffForHumans() : 'No Date'}}</td>
                                                <td>
                                                    <a class="badge badge-success px-2" href="">
                                                        Click Here
                                                        <i style="color: blue" class="fa fa-arrow-left"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                <a href="{{route('admin.posts.edit', $post->id)}}">
                                                    <i style="color: red" class="fa fa-edit fa-lg"></i>
                                                </a>
                                                /
                                                <a href="{{route('admin.posts.edit', $post->id)}}">
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