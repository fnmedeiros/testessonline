<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $att=Attendance::all();
        return response()->json($att, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('backend/attendance/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        if (Attendance::create($request->all())){
            return response()->json('status OK',200);
        }
        
        return response()->json('Erroooooo!!!!',500);
        
        
        //return redirect(route('att.index'))
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $att = Specialty::find($id);


        //return view('backend.attendance.edit', compact('att'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (Attendance::find($id)->update($request->all())){
            return response()->json('status OK',200);
        }
        
        return response()->json('Erroooooo!!!!',500);
        
        //return redirect(route('att.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Attendance::find($id)->where('id', $id)->delete()){
            return response()->json('status OK',200);
        }
        
        return response()->json('Erroooooo!!!!',500);

        
        //return redirect(route('att.index'));
    }

    public function showSchedule($id)
    {
        $schedules = Attendance::find($id);
        //dd($schedules->schedules);
        return view('backend.attendances.showSched', ['schedules'=>$schedules->schedules]);        
    }

    public function addSchedule(Request $request)
    {
        Attendance::find($request->id)->schedules()->attach($request->sched_id);
        $att = Attendance::find($request->id);
        dd($att->schedules());
        //echo "teste";
    }
}
