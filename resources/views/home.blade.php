@extends('layouts.app')

@section('title')
    User Dashboard
@endsection

@section('header')
    <h3>Dashboard</h3>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Hi</strong></div>
                    <div class="card-body">
                        <p>You are logged in as Regular User!</p>
                        <p>Happy working :)</p>
                        <a href="/report/create" class="btn btn-outline-primary btn-font-family mb-3" role="button"><i class="fas fa-edit"></i> Create Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
