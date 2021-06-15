@extends('layouts.app')

@section('title')
    Report Create Page
@endsection

@section('header')
    <h1>Create Report</h1>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <form id="formcreate" name="formcreate" action="/report" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3"> <!--/status form-->
                    <div class="col-12">
                        <label for="status" class="form-label">Report Job Status</label>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status" value="1">
                            <label class="form-check-label" for="status">Done</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status" value="2">
                            <label class="form-check-label" for="status">Pending</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="status" value="3">
                            <label class="form-check-label" for="status">Cancel</label>
                        </div>
                    </div>
                    @error('status')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                    @enderror
                </div> <!--/.status form-->
                <div class="mb-3"> <!--/remarks form-->
                        <label for="remarks" class="form-label">Job Remarks</label>
                        <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Masukkan Remarks">
                        @error('remarks')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                </div> <!--/.remarks form-->
                <div class="mb-3"> <!--/upload image 1-->
                    <label for="imageurl_1" class="form-label">Upload Location Photo</label>
                    <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                        <input type="file" class="form-control" name="imageurl_1" id="imageurl_1" placeholder="*Upload image file (JPG, JPEG, PNG)">
                        @error('imageurl_1')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                        @enderror
                    </div>
                </div><!--/.upload image 1-->     
                <div class="mb-3"> <!--/upload image 2-->
                    <div class="col-12">
                        <label for="imageurl_2" class="form-label">Upload Job Photo</label>
                        <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                            <input type="file" class="form-control" name="imageurl_2" id="imageurl_2" placeholder="*Upload image file (JPG, JPEG, PNG)">
                            @error('imageurl_2')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div><!--/.upload image 2-->
                <div class="mb-3"> <!--/upload image 3-->
                    <div class="col-12">
                        <label for="imageurl_3" class="form-label">Upload Equipment Photo</label>
                        <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                            <input type="file" class="form-control" name="imageurl_3" id="imageurl_3" placeholder="*Upload image file (JPG, JPEG, PNG)">
                            @error('imageurl_3')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div><!--/.upload image 3-->
                <div class="mb-3"> <!--/upload image 4-->
                    <div class="col-12">
                        <label for="imageurl_4">Upload Equipment Photo</label>
                        <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                            <input type="file" class="form-control" name="imageurl_4" id="imageurl_4" placeholder="*Upload image file (JPG, JPEG, PNG)">
                            @error('imageurl_4')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div><!--/.upload image 4-->
                <button id="create" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> <!--/.col md-8-->
    </div> <!--/.row-->
</div> <!--/.container-fluid-->
@endsection