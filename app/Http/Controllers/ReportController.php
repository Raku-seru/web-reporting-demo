<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = Report::all();
        return view('home',compact('report'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'remarks' => 'required',
    		'status' => 'required',
            'imageurl_1' => 'mimes:jpeg,png,jpg,JPG,PNG',
            'imageurl_2' => 'mimes:jpeg,png,jpg,JPG,PNG',
            'imageurl_3' => 'mimes:jpeg,png,jpg,JPG,PNG',
            'imageurl_4' => 'mimes:jpeg,png,jpg,JPG,PNG',
    	]);
            
        $img1 = $request->imageurl_1;
        $img2 = $request->imageurl_2;
        $img3 = $request->imageurl_3;
        $img4 = $request->imageurl_4;
        $name_img1 = time().' - '.$img1->getClientOriginalName();
        $name_img2 = time().' - '.$img2->getClientOriginalName();
        $name_img3 = time().' - '.$img3->getClientOriginalName();
        $name_img4 = time().' - '.$img4->getClientOriginalName();

        Report::create([
    		'remarks' => $request->remarks,
    		'imageurl_1' => $request->imageurl_1,
            'imageurl_2' => $request->imageurl_2,
            'imageurl_3' => $request->imageurl_3,
            'imageurl_4' => $request->imageurl_4,
            'status' => $request->status,
            'user_id' => Auth::id()
    	]);
 
        $img1->move('uploads',$name_img1);
        $img2->move('uploads',$name_img2);
        $img3->move('uploads',$name_img3);
        $img4->move('uploads',$name_img4);
    	return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view('report.show', compact('report'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::find($id);
        $report->delete();
        return redirect('/home');
    }
}
