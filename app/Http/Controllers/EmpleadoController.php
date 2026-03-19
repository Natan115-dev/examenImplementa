<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados=Empleado::all();
        return view('empleado.index')->with('dEmpleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado=new Empleado();
        $empleado->codigoEmpleado=$request->get('codigoEmpleado');
        $empleado->nombreEmpleado=$request->get('nombreEmpleado');
        $empleado->puestoEmpleado=$request->get('puestoEmpleado');
        $empleado->save();

        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $empleado=Empleado::find($id);
        
        return view('empleado.delete')->with('empleadoE',$empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $empleado=Empleado::find($id);
        
        return view('empleado.edit')->with('empleadoE',$empleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $empleado=Empleado::find($id);
        $empleado->codigoEmpleado=$request->get('codigoEmpleado');
        $empleado->nombreEmpleado=$request->get('nombreEmpleado');
        $empleado->puestoEmpleado=$request->get('puestoEmpleado');
        $empleado->save();

        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=Empleado::find($id);
        $eliminado->delete();
        return redirect('/empleado');
    }
}
