<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}

img {
    position: relative;
}
</style>

@foreach ($report as $val)
Report ID : #{{$val->id}}<br>
Report Date : {{$val->created_at}}<br>
<strong>Status : {{App\Status::where('id',$val->status)->first('name')->name}}</strong><br>
Remarks : {{$val->remarks}}<br>
Author : {{App\User::where('id',$val->user_id)->first('name')->name}}<br>
<br>
<table>
    <thead>
        <tr>
            <th>Image 1</th>
            <th>Image 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="{{ public_path('uploads/'.$val->imageurl_1) }}" width="240px" height="240px"></td>
            <td><img src="{{ public_path('uploads/'.$val->imageurl_2) }}" width="240px" height="240px"></td>
        </tr>
    </tbody>
    <thead>
        <tr>
            <th>Image 3</th>
            <th>Image 4</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="{{ public_path('uploads/'.$val->imageurl_3) }}" width="240px" height="240px"></td>
            <td><img src="{{ public_path('uploads/'.$val->imageurl_4) }}" width="240px" height="240px"></td>
        </tr>
    </tbody>
@endforeach