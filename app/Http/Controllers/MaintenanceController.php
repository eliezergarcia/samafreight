<?php

namespace App\Http\Controllers;

use App\Maintenance;
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
