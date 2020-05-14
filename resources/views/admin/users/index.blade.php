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
                                    <td>{{$user->phone_number}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>{{$user->updated_at->diffForHumans()}}</td>
                                    <td>
                                    <a href="{{route('admin.users.edit', $user->id)}}">
                                    <i class="fa fa-edit text-red fa-lg"></i>
                                    </a>
                                    /
                                <a class="sweetalert m-t-30" href="#">
                                        <i class="fa fa-trash text-dark fa-lg"></i>
                                    </a>
                                    {{-- <button class="btn btn-warning btn sweet-success-cancel">
                                        <i class="fa fa-trash text-dark fa-lg"></i>

                                    </button> --}}

                                    
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
{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
{{-- <script>
    $('#try').click(function(){

        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.value) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })

    });
</script> --}}

    
@endsection