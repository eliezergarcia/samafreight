<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administration.users.index');
    }

    public function list()
    {
        $usuarios = User::all();

        return $usuarios;
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

        $user = (new User)->fill($request->all());

        if ($request->hasFile('avatar')) {
          $user->avatar = $request->file('avatar')->store('public');
        }

        $user->password_encrypted = $request->password;
        $user->save();

        /*$user->roles()->attach($request->roles);*/

        if($user){
            DB::commit();
            return back()->with('success', 'El usuario se ha registrado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al registrar el usuario.');
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
        $user = User::findOrFail($id);

        return view('administration.users.edit')->with(compact('user'));
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
/*        dd($request->file('avatar')->getClientOriginalName());*/
        DB::beginTransaction();

        $user = User::findOrFail($id);

        if ($request->hasFile('avatar')) {
          $user->avatar = $request->file('avatar')->store('public');
        }

        $user->update($request->all());
        $user->password = $request->password_encrypted;
        $user->save();

        /*if ($request->has('roles')) {
            $user->roles()->sync($request->roles);
        }*/

        if($user){
            DB::commit();
            return back()->with('success', 'La información del usuario se ha guardado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al guardar la información del usuario.');
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

        $user = User::findOrFail($id);
        $user->activate();

        if($user){
            DB::commit();
            return redirect()->route('usuarios.index')->with('success', 'El usuario ha sido desactivado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al desactivar el usuario.');
        }
    }

    public function deactivate($id)
    {
        DB::beginTransaction();

        $user = User::findOrFail($id);
        $user->deactivate();

        if($user){
            DB::commit();
            return redirect()->route('usuarios.index')->with('success', 'El usuario ha sido desactivado correctamente.');
        }else{
            DB::rollBack();
            return back()->with('error', 'Ocurrió un problema al desactivar el usuario.');
        }
    }
}
