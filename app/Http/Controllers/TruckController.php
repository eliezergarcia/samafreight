<?php

namespace App\Http\Controllers;

use App\Truck;
use App\Type;
use App\Brand;
use App\Service;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$trucks = Truck::with(['type', 'brand', 'service', 'owner'])->get();*/

        /*echo json_encode($trucks);*/
        return view('maintenance.trucks.index');
    }

    public function list()
    {
        $trucks = Truck::with(['type', 'brand', 'service', 'owner'])->get();

        return $trucks;
    }

    public function status($id)
    {
        $truck = Truck::where('id', $id)->with(['type', 'brand', 'service', 'owner'])->get();
        return $truck->present()->statusBadge();   
    }

    public function findPlates(Request $request, $id)
    {
        $truck = Truck::where('id', $id)->with(['type', 'brand', 'service', 'owner'])->get();

        return $truck;
    }

    public function relations(Request $request, $id)
    {
        $truck = Truck::where('id', $id)->with(['type', 'brand', 'service', 'owner'])->get();

        $types = Type::all();
        $brands = Brand::all();
        $services = Service::all();
        $owners = Owner::all();

        $data = [
            'truck' => $truck,
            'types' => $types,
            'brands' => $brands,
            'services' => $services,
            'owners' => $owners,
        ];

        return $data;
    }

    public function relationsCreate()
    {
        $types = Type::all();
        $brands = Brand::all();
        $services = Service::all();
        $owners = Owner::all();

        $data = [
            'types' => $types,
            'brands' => $brands,
            'services' => $services,
            'owners' => $owners,
        ];

        return $data;
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
        DB::beginTransaction();

        $truck = (new Truck)->fill($request->all());
        $truck->save();

        /*$user->roles()->attach($request->roles);*/

        if($truck){
            DB::commit();
            return back()->with('success', 'El tractor se ha registrado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al registrar el tractor.');
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
        $truck = Truck::findOrFail($id);

        return view('maintenance.trucks.show')->with(compact('truck'));
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
        DB::beginTransaction();

        $truck = Truck::findOrFail($id);

        $truck->update($request->all());
        $truck->save();


        if($truck){
            DB::commit();
            return back()->with('success', 'La información del tractor se ha guardado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al guardar la información del tractor.');
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

    public function activate($id)
    {
        DB::beginTransaction();

        $truck = Truck::findOrFail($id);
        $truck->activate();

        if($truck){
            DB::commit();
            return redirect()->route('tractores.index')->with('success', 'El tractor ha sido desactivado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al desactivar el tractor.');
        }
    }

    public function deactivate($id)
    {
        DB::beginTransaction();

        $truck = Truck::findOrFail($id);
        $truck->deactivate();

        if($truck){
            DB::commit();
            return redirect()->route('tractores.index')->with('success', 'El tractor ha sido desactivado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al desactivar el tractor.');
        }
    }
}
