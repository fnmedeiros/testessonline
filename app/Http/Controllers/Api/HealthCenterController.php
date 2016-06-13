<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Health_Center;

class HealthCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hCenter=Health_Center::all();
        return response()->json($hCenter, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('backend/person/create');
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
        //$person = Person::create($request->all());
        if (Health_Center::create($request->all())){
            return response()->json('status OK',200);
        }
        
        return response()->json('Erroooooo!!!!',500);
        
        
        //return redirect(route('hc.index'))
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
        $hCenter = Health_Center::find($id);


        //return view('backend.hc.edit', compact('hCenter'));
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

        if (Health_Center::find($id)->update($request->all())){
            return response()->json('status OK',200);
        }
        
        return response()->json('Erroooooo!!!!',500);
        
        //return redirect(route('hc.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Health_Center::find($id)->where('id', $id)->delete()){
            return response()->json('status OK',200);
        }
        
        return response()->json('Erroooooo!!!!',500);

        
        //return redirect(route('hc.index'));
    }

    public function showDoctor($id)
    {
        
        $hc = Health_Center::find($id);
        dd($hc->doctors());
    }

    public function addDoctor(Request $request)
    {
        Health_Center::find($request->id)->doctors()->attach($request->med_id);
        $hc = Health_Center::find($request->id);
        dd($hc->doctors());
        //echo "teste";
    }
}
