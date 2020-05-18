@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                <a href="{{url('admin/users')}}">
                    <h3 class="card-title text-white">Registered Users</h3>
                    <div class="d-inline-block">
                    <h2 class="text-white">{{$usersCount ? $usersCount : 'No Users'}}</h2>
                    <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                <a href="{{url('admin/posts')}}">
                    <h3 class="card-title text-white">All Post</h3>
                    <div class="d-inline-block">
                    <h2 class="text-white">{{$postCount ? $postCount : 'No Posts Yet'}}</h2>
                        <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                <a href="{{url('admin/categories')}}">
                    <h3 class="card-title text-white">All Categories</h3>
                    <div class="d-inline-block">
                    <h2 class="text-white">{{$categoryCount ? $categoryCount : 'No Categories'}}</h2>
                        <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="card-title text-white">Customer Satisfaction</h3>
                    <div class="d-inline-block">
                        <h2 class="text-white">99%</h2>
                        <p class="text-white mb-0">Jan - March 2019</p>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                </div>
            </div>
        </div>
    </div>


    
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./images/users/8.jpg" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">Ana Liem</h5>
                        <p class="m-0">Senior Manager</p>
                        <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./images/users/5.jpg" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">John Abraham</h5>
                        <p class="m-0">Store Manager</p>
                        <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./images/users/7.jpg" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">John Doe</h5>
                        <p class="m-0">Sales Man</p>
                        <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="./images/users/1.jpg" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">Mehedi Titas</h5>
                        <p class="m-0">Online Marketer</p>
                        <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="active-member">
                        <div class="table-responsive">
                            <table class="table table-xs mb-0">
                                <thead>
                                    <tr>
                                        <th>Customers</th>
                                        <th>Product</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                        <th>Payment Method</th>
                                        <th>Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                        <td>iPhone X</td>
                                        <td>
                                            <span>United States</span>
                                        </td>
                                        <td>
                                            <div>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-success" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                        <td>
                                            <span>Last Login</span>
                                            <span class="m-0 pl-3">10 sec ago</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="./images/avatar/2.jpg" class=" rounded-circle mr-3" alt="">Walter R.</td>
                                        <td>Pixel 2</td>
                                        <td><span>Canada</span></td>
                                        <td>
                                            <div>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-success" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                        <td>
                                            <span>Last Login</span>
                                            <span class="m-0 pl-3">50 sec ago</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="./images/avatar/3.jpg" class=" rounded-circle mr-3" alt="">Andrew D.</td>
                                        <td>OnePlus</td>
                                        <td><span>Germany</span></td>
                                        <td>
                                            <div>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="fa fa-circle-o text-warning  mr-2"></i> Pending</td>
                                        <td>
                                            <span>Last Login</span>
                                            <span class="m-0 pl-3">10 sec ago</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="./images/avatar/6.jpg" class=" rounded-circle mr-3" alt=""> Megan S.</td>
                                        <td>Galaxy</td>
                                        <td><span>Japan</span></td>
                                        <td>
                                            <div>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-success" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                        <td>
                                            <span>Last Login</span>
                                            <span class="m-0 pl-3">10 sec ago</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="./images/avatar/4.jpg" class=" rounded-circle mr-3" alt=""> Doris R.</td>
                                        <td>Moto Z2</td>
                                        <td><span>England</span></td>
                                        <td>
                                            <div>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-success" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                        <td>
                                            <span>Last Login</span>
                                            <span class="m-0 pl-3">10 sec ago</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="./images/avatar/5.jpg" class=" rounded-circle mr-3" alt="">Elizabeth W.</td>
                                        <td>Notebook Asus</td>
                                        <td><span>China</span></td>
                                        <td>
                                            <div>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><i class="fa fa-circle-o text-warning  mr-2"></i> Pending</td>
                                        <td>
                                            <span>Last Login</span>
                                            <span class="m-0 pl-3">10 sec ago</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>


</div>
    
@endsection