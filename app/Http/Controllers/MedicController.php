<?php

namespace App\Http\Controllers;
use App\Models\Medic;
use Illuminate\Http\Request;

class MedicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medics = Medic::paginate(10);
        return view('medics.index', compact('medics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:80',
            'last_name' => 'required|string|max:80',
            'ci' => 'required|integer|unique:medics,ci',
            'email' => 'required|email|max:80|unique:medics,email',
            'phone' => 'required|string|max:15',
        ]);

        $medic = Medic::create($validatedData);
        return redirect()->route('medic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medic $medic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medic $medic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medic $medic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medic $medic)
    {
        //
    }
}
