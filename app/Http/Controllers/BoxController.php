<?php

namespace App\Http\Controllers;

use App\Box;
use App\Type;
use App\Brand;
use App\Owner;
use App\Service;
use App\Movement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('maintenance.boxes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        $boxes = Box::with(['type', 'brand'])->get();

        return $boxes;
    }

    public function relations(Request $request, $id)
    {
        $box = Box::where('id', $id)->with(['type', 'brand'])->get();

        $types = Type::where('type', 'BOX')->get();
        $brands = Brand::all();

        $data = [
            'box' => $box,
            'types' => $types,
            'brands' => $brands,
        ];

        return $data;
    }

    public function findPlates(Request $request, $id)
    {
        $box = Box::where('id', $id)->with(['type', 'brand'])->get();

        return $box;
    }

    public function relationsCreate()
    {
        $types = Type::where('type', 'BOX')->get();
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
        DB::beginTransaction();

        $box = (new Box)->fill($request->all());
        $box->save();

        /*$user->roles()->attach($request->roles);*/

        if($box){
            DB::commit();
            return back()->with('success', 'La caja se ha registrado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al registrar la caja.');
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
        $box = Box::findOrFail($id);

        return view('maintenance.boxes.show')->with(compact('box'));
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

        $box = Box::findOrFail($id);

        $box->update($request->all());
        $box->save();


        if($box){
            DB::commit();
            return back()->with('success', 'La información de la caja se ha guardado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al guardar la información de la caja.');
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

        $box = Box::findOrFail($id);
        $box->activate();

        if($box){
            DB::commit();
            return redirect()->route('cajas.index')->with('success', 'La caja ha sido desactivado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al desactivar la caja.');
        }
    }

    public function deactivate($id)
    {
        DB::beginTransaction();

        $box = Box::findOrFail($id);
        $box->deactivate();

        if($box){
            DB::commit();
            return redirect()->route('cajas.index')->with('success', 'La caja ha sido desactivado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al desactivar la caja.');
        }
    }

    public function movimientos($id)
    {
        DB::beginTransaction();

        $box = Box::findOrFail($id);
        $movement = Movement::where('box_id', $box->id)->orderBy('id', 'desc')->first();

        if ($movement) {
            if($movement->movements == 60){
                $movement = new Movement;
                $movement->box_id = $box->id;
                $movement->movements = 1;

                $movement->save();
            }else{
                $movement->update(['movements' => $movement->movements + 1]);
            }
        }else{
            $movement = new Movement;
            $movement->box_id = $box->id;
            $movement->movements = 1;

            $movement->save();
        }
        
        if($movement){
            DB::commit();
            return redirect()->route('cajas.index')->with('success', 'El movimiento se generó correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al generar el movimiento.');
        }
    }
}
