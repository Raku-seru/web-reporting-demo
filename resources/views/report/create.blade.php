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
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card py-4 px-5">
                <form id="formcreate" name="formcreate" action="/report" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group"> <!--/status form-->
                    <label for="status" class="form-label">Report Job Status</label>
                    <div class="col-md-12">
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
                            <span class="badge badge-danger">
                                This field is required.
                            </span>
                    @enderror
                </div> <!--/.status form-->
                <div class="form-group"> <!--/remarks form-->
                        <label for="remarks" class="form-label">Job Remarks</label>
                        <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Masukkan Remarks">
                        @error('remarks')
                            <span class="badge badge-danger">
                                This field is required.
                            </span>
                        @enderror
                </div> <!--/.remarks form-->
                <div class="form-group"> <!--/upload image 1-->
                    <label for="imageurl_1" class="form-label">Upload Location Photo</label>
                    <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                    <input type="file" class="form-control-file" name="imageurl_1" id="imageurl_1">
                    @error('imageurl_1')
                            <span class="badge badge-danger">
                                This field is required.
                            </span>
                    @enderror
                </div><!--/.upload image 1-->     
                <div class="form-group"> <!--/upload image 2-->
                    <label for="imageurl_2" class="form-label">Upload Job Photo</label>
                    <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                    <input type="file" class="form-control-file" name="imageurl_2" id="imageurl_2">
                    @error('imageurl_2')
                        <span class="badge badge-danger">
                            This field is required.
                        </span>
                    @enderror
                </div><!--/.upload image 2-->
                <div class="form-group"> <!--/upload image 3-->
                    <label for="imageurl_3" class="form-label">Upload Equipment Photo</label>
                    <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                    <input type="file" class="form-control-file" name="imageurl_3" id="imageurl_3">
                    @error('imageurl_3')
                        <span class="badge badge-danger">
                            This field is required.
                        </span>
                    @enderror
                </div><!--/.upload image 3-->
                <div class="form-group"> <!--/upload image 4-->
                    <label for="imageurl_4">Upload Equipment Photo</label>
                    <div class="text-xs text-danger float-right">*Upload image file (JPG, JPEG, PNG)</div>
                    <input type="file" class="form-control-file" name="imageurl_4" id="imageurl_4">
                    @error('imageurl_4')
                        <span class="badge badge-danger">
                            This field is required.
                        </span>
                    @enderror
                </div><!--/.upload image 4-->
                <button id="create" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div> <!--/.col md-8-->
    </div> <!--/.row-->
</div> <!--/.container-fluid-->
@endsection