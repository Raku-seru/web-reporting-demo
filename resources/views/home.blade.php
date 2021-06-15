@extends('layouts.app')

@section('title')
    Report Dashboard
@endsection

@section('header')
    <h1>Welcome {{Auth::user()->name}} !</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <p>You are logged in as Regular User!</p>
                        <a href="/report/create" class="btn btn-outline-primary btn-font-family mb-3" role="button"><i class="fas fa-edit"></i> Create Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
