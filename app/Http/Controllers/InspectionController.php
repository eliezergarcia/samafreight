<?php

namespace App\Http\Controllers;

use App\Box; 
use App\Truck; 
use App\Driver; 
use App\Mechanic;
use App\Inspection;
use App\Coordinator; 
use App\InspectionPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function list($id){
        $inspections = Inspection::with(['truck', 'box', 'driver', 'coordinator'])->where('truck_id', '=', $id)->get();

        return $inspections;
    }

    public function findInspection($id){
        $inspection = Inspection::with(['truck', 'box', 'driver', 'coordinator'])->where('id', '=', $id)->get();
        $points = DB::table('assigned_points')->where('inspection_id', '=', $id)->get();
        $pointsInspection = InspectionPoint::where('inactive_at', null)->where('type', 'TRUCK & TRAILER')->get();
        $boxes = Box::all();
        $trucks = Truck::with(['type', 'brand', 'service', 'owner'])->get();
        $drivers = Driver::where('inactive_at', null)->get();
        $coordinators = Coordinator::where('inactive_at', null)->get();
        $mechanics = Mechanic::where('inactive_at', null)->get();

        $data = [
            'inspection' => $inspection['0'],
            'points' => $points,
            'pointsInspection' => $pointsInspection,
            'boxes' => $boxes,
            'trucks' => $trucks,
            'drivers' => $drivers,
            'coordinators' => $coordinators,
            'mechanics' => $mechanics,
        ];

        return $data;
    }

    public function listBox($id){
        $inspections = Inspection::with(['truck', 'box', 'driver', 'coordinator'])->where('box_id', '=', $id)->get();

        return $inspections;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request->points_inspection[0]);*/
         DB::beginTransaction();

        $inspection = (new Inspection)->fill($request->all());
        // var_dump($request);
        $inspection->save();

        $points = InspectionPoint::where('inactive_at', null)
                                ->where('type', 'TRUCK & TRAILER')->get();

        /*dd($points[0]['id']);*/

        for ($i=0; $i < count($points); $i++) 
        { 
            DB::table('assigned_points')->insert([
                'inspection_id' => $inspection->id, 
                'point_id' => $points[$i]['id'], 
                'value' => $request->points_inspection[$i]
            ]);
        }


        if($inspection){
            DB::commit();
            return back()->with('success', 'La inspección se ha registrado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al registrar la inspección.');
        }
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
        //
    }

    public function modificar(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();

        $inspection = Inspection::find($request->inspection_id);
        $inspection->update($request->all());

        $points = DB::table('assigned_points')->where('inspection_id', '=', $request->inspection_id)->get();
        $pointsUpdate = $request->points_inspection;
        // dd($pointsUpdate[0]);

        for ($i=0; $i < count($points); $i++) 
        { 
            DB::table('assigned_points')->where('id', $points[$i]->id)
                                        ->update([
                'value' => $pointsUpdate[$i]
            ]);
        }

        if($inspection){
            DB::commit();
            return back()->with('success', 'La inspección se ha registrado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al registrar la inspección.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
