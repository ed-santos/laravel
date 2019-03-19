@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Main Content -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><span class="sectionHeader" text-align="center">Profile</span></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="content">
                                <h1>List of all Posts</h1>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Profile</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        @if(Auth::check())
                                            <th scope="col">update</th>

                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{Auth::user()->fname}}</td>
                                            <td>{{Auth::user()->lname}}</td>

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