<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::all();

        return view('registros')->with([
            'materias' => $materias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->creditos = $request->creditos; 
        $materia->profesor = $request->profesor; 
        $materia->save();

        return redirect()->route('materia.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        return view('detalle',compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        return view('editar', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $materia->nombre = $request->nombre;
        $materia->creditos = $request->creditos; 
        $materia->profesor = $request->profesor; 
        $materia->save();

        return redirect()->route('materia.show', $materia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materia.index');
    }
}