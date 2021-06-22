@extends('layouts.app')

@section('title')
    Report Dashboard
@endsection

@section('header')
    <h3>Report Dashboard</h3>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>List Report</strong></div>
                    <div class="card-body">
                        <a href="/report/create" class="btn btn-outline-primary btn-font-family mb-3" role="button"><i class="fas fa-edit"></i> Create Report</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Remarks</th>
                                    <th scope="col">Location Image</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($report as $val)
                                    <tr>
                                        <th scope="row">{{$val->id}}</th>
                                        <td>{{$val->status}}</td>
                                        <td>{{$val->remarks}}</td>
                                        <td><img src="{{asset('/uploads/'.$val->imageurl_1)}}" width="160" height="160"></td>
                                        <td>{{$val->user_id}}</td>
                                        <td>{{$val->created_at}}</td>
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