<?php

namespace App\Http\Controllers;

use App\Maintenance;
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

class MaintenanceController extends Controller
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
        $maintenances = Maintenance::with(['truck', 'box', 'driver', 'coordinator', 'mechanic', 'conductor'])->where('truck_id', '=', $id)->get();
                    // ->join('boxes', 'inspections.box_id', '=', 'boxes.id')
                    // ->join('drivers', 'inspections.driver_id', '=', 'drivers.id')
                    // ->join('coordinators', 'inspections.coordinator_id', '=', 'coordinators.id')

        return $maintenances;
    }

    public function findMaintenance($id){
        $maintenance = Maintenance::with(['truck', 'box', 'driver', 'coordinator'])->where('id', '=', $id)->get();
        $points = DB::table('assigned_points')->where('maintenance_id', '=', $id)->get();
        $pointsMaintenance = InspectionPoint::where('inactive_at', null)->get();
        $boxes = Box::all();
        $trucks = Truck::with(['type', 'brand', 'service', 'owner'])->get();
        $drivers = Driver::where('inactive_at', null)->get();
        $coordinators = Coordinator::where('inactive_at', null)->get();
        $mechanics = Mechanic::where('inactive_at', null)->get();

        $data = [
            'maintenance' => $maintenance['0'],
            'points' => $points,
            'pointsMaintenance' => $pointsMaintenance,
            'boxes' => $boxes,
            'trucks' => $trucks,
            'drivers' => $drivers,
            'coordinators' => $coordinators,
            'mechanics' => $mechanics,
        ];

        return $data;
    }

    public function listBox($id){
        $maintenances = Maintenance::with(['truck', 'box', 'driver', 'coordinator', 'mechanic', 'conductor'])->where('box_id', '=', $id)->get();
                    // ->join('boxes', 'inspections.box_id', '=', 'boxes.id')
                    // ->join('drivers', 'inspections.driver_id', '=', 'drivers.id')
                    // ->join('coordinators', 'inspections.coordinator_id', '=', 'coordinators.id')

        return $maintenances;
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
        /*dd($request->all());*/
        /*dd($request->points_inspection[0]);*/
         DB::beginTransaction();

        $maintenance = (new Maintenance)->fill($request->all());
        $maintenance->save();

        $points = InspectionPoint::where('inactive_at', null)
                                ->where('type', 'TRUCK')->get();

        /*dd($points[0]['id']);*/

        for ($i=0; $i < count($points); $i++) 
        { 
            DB::table('assigned_points')->insert([
                'maintenance_id' => $maintenance->id, 
                'point_id' => $points[$i]['id'], 
                'value' => $request->point_truck[$i]
            ]);
        }

        $points = InspectionPoint::where('inactive_at', null)
                                ->where('type', 'TRAILER')->get();


        for ($i=0; $i < count($points); $i++) 
        { 
            DB::table('assigned_points')->insert([
                'maintenance_id' => $maintenance->id, 
                'point_id' => $points[$i]['id'], 
                'value' => $request->point_trailer[$i]
            ]);
        }


        if($maintenance){
            DB::commit();
            return back()->with('success', 'El mantenimiento se ha registrado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al registrar el mantenimiento.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
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

        $maintenance = Maintenance::find($request->maintenance_id);
        $maintenance->update($request->all());

        $points = DB::table('assigned_points')->where('maintenance_id', '=', $request->maintenance_id)->get();
        $pointsUpdate = $request->points_inspection;
        // dd($pointsUpdate[0]);

        for ($i=0; $i < count($points); $i++) 
        { 
            DB::table('assigned_points')->where('id', $points[$i]->id)
                                        ->update([
                'value' => $pointsUpdate[$i]
            ]);
        }

        if($maintenance){
            DB::commit();
            return back()->with('success', 'El mantenimiento se ha registrado correctamente.');
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
