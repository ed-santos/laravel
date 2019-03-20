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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Log Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wifiusers as $connectRec)

                                    <tr>
                                        <td>{{$connectRec->locationid}}</td>
                                        <td>{{$connectRec->fname}}</td>
                                        <td>{{$connectRec->email}}</td>
                                        <td>{{$connectRec->timestamps}}</td>

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
