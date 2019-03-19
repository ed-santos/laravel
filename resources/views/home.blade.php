@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Main Content -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><span class="sectionHeader" text-align="center">Dashboard</span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                            <h4>Your Wifi Users</h4>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Location</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col"></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wifiUsers as $wifiUsers)

                                    <tr>
                                        <td>{{$wifiUsers->name}}</td>
                                        <td>{{$wifiUsers->email}}</td>
                                        <!--take note of the url structure below. it dynamically changes the link structure to include post ID and pass info via get method-->
                                        <td><a href="/post?id={{$singlePost->id}}">{{$singlePost->title}}</a></td>
                                        <td>{{$singlePost->description}}</td>

                                        @if(Auth::check())

                                            @if(Auth::user()-> id == $singlePost->user_id)
                                                <td><a href="/update/{{$singlePost->id}}" class="btn btn-primary">update</a></td>
                                                <td><a href="/deletePost/{{$singlePost->id}}" class="btn btn-danger">delete</a></td>
                                            @endif
                                        @endif
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
