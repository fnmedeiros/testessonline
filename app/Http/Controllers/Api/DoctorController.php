<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Person;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor=Doctor::all();
        return response()->json($doctor, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = Person::create($request->all());
            
        
        if (Doctor::create(['person_id' => $person->id])){
            return response()->json('status OK',200);
        }
        
        return response()->json('Erroooooo!!!!',500);
        //return redirect(route('doc.index'));
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
        //
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
        $doctor = Doctor::find($id);
        if($doctor->update($request->all())) {
            Person::find($doctor->person_id)->update($request->all());
            return response()->json('status OK',200);
        } else {
            return response()->json('Erroooooo!!!!!',500);
        }
        //return redirect(route('cust.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        if($doctor->delete()){
            Person::find($doctor->person_id)->delete();
        }
        //return redirect(route('doc.index'));
    }

    public function showSpec($id)
    {
        
        $doc = Doctor::find($id);
        dd($doc->specialties());
    }

    public function addSpec(Request $request)
    {
        Doctor::find($request->id)->specialties()->attach($request->spec_id);
        $doc = Doctor::find($request->id);
        dd($doc->specialties());
        //echo "teste";
    }
}
