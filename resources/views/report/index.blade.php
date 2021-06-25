@extends('layouts.app')

@section('title')
    Report Dashboard
@endsection

@push('hstyle')
<link rel="stylesheet" href="{{asset('plugins/datatables/datatables.min.css')}}">
@endpush

@section('header')
    <h3>Report Dashboard</h3>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><strong>List Report</strong></div>
                    <div class="card-body">
                        <a href="/report/create" class="btn btn-outline-primary btn-font-family mb-3" role="button"><i class="fas fa-edit"></i> Create Report</a>
                        <table id="dtreport" class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Remarks</th>
                                    <!-- <th scope="col">Location Image</th> -->
                                    <th scope="col">Author</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($report as $val)
                                <?php $getname = App\User::where('id',$val->user_id)->first('name');
                                $getstatus = App\Status::where('id',$val->status)->first('name');?>
                                    <tr class="border-bottom">
                                        <td>{{$val->id}}</th>
                                        <th>{{$getstatus->name}}</td>
                                        <td>{{$val->remarks}}</td>
                                        <!-- <td><img src="{{asset('/uploads/'.$val->imageurl_1)}}" width="120" height="120"></td> -->
                                        <td>{{$getname->name}}</td>
                                        <td>{{$val->created_at}}</td>
                                        <td><a href="#" class="btn btn-primary btn-font-family" role="button"><i class="fas fa-file"></i> PDF</a></td>
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

@push('bscript')
<script src="{{asset('plugins/datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#dtreport').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
@endpush