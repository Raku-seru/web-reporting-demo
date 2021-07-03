<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Auth;
use PDF;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        If(Auth::check() && Auth::user()->is_admin) {
            $getreport = new Report;
            $report = Report::all();
            return view('report.index',compact('report'));
        } else {
            $getreport = new Report;
            $report = Report::where('user_id', Auth::id())->get();
            return view('report.index', compact('report'));
        }
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
    		'status' => 'required',
            'remarks' => 'required',
            'imageurl_1' => 'required|mimes:jpeg,png,jpg,JPG,PNG',
            'imageurl_2' => 'nullable|mimes:jpeg,png,jpg,JPG,PNG',
            'imageurl_3' => 'nullable|mimes:jpeg,png,jpg,JPG,PNG',
            'imageurl_4' => 'nullable|mimes:jpeg,png,jpg,JPG,PNG',
    	]);

        $img1 = $request->file('imageurl_1');
        $img2 = $request->file('imageurl_2');
        $img3 = $request->file('imageurl_3');
        $img4 = $request->file('imageurl_4');

        $name_img1 = time().' - '.$img1->getClientOriginalName();
        if($img2 == null) {
            $name_img2 = 'null';
        } else {
            $name_img2 = time().' - '.$img2->getClientOriginalName();
        };
        if($img3 == null) {
            $name_img3 = 'null';
        } else {
            $name_img3 = time().' - '.$img3->getClientOriginalName();
        };
        if($img4 == null) {
            $name_img4 = 'null';
        } else {
            $name_img4 = time().' - '.$img4->getClientOriginalName();
        };

        Report::create([
            'status' => $request->status,
    		'remarks' => $request->remarks,
    		'imageurl_1' => $name_img1,
            'imageurl_2' => $name_img2,
            'imageurl_3' => $name_img3,
            'imageurl_4' => $name_img4,
            'user_id' => Auth::id()
    	]);
 
        $img1->move('uploads',$name_img1);
        if($img2 == null) {
            //
        } else {
            $img2->move('uploads',$name_img2);
        };
        if($img3 == null) {
            //
        } else {
            $img3->move('uploads',$name_img3);
        };
        if($img4 == null) {
            //
        } else {
            $img4->move('uploads',$name_img4);
        };

    	return redirect('/report');
    }

    public function getPDF(Request $request, $id){
        $report = Report::where('id', $id)->get();
        $pdf = PDF::loadView('report.result', [
            'report' => $report,
            ]);
        return $pdf->stream('result.pdf');              
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
        return redirect('/report');
    }
}
