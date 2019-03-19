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

                    Welcome! <!-- chartJS area -->
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
