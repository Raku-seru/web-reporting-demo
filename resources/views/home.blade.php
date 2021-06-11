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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Regular User!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
