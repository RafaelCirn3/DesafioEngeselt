<?php

namespace App\Http\Controllers;

use App\Models\Confeitaria;
use App\Http\Requests\StoreConfeitariaRequest;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ConfeitariaController extends Controller
{
    public function index()
    {
        $confeitarias = Confeitaria::with('produtos')->get();
        return Inertia::render('Confeitarias/Index', compact('confeitarias'));
    }

    public function create()
    {
        return Inertia::render('Confeitarias/Create');
    }

    public function store(StoreConfeitariaRequest $request)
    {
        Confeitaria::create($request->validated());
        return redirect()->route('confeitarias.index')->with('success', 'Confeitaria criada com sucesso!');
    }

    public function show(Confeitaria $confeitaria)
    {
        $confeitaria->load('produtos');
        return Inertia::render('Confeitarias/Show', compact('confeitaria'));
    }

    public function edit(Confeitaria $confeitaria)
    {
        return Inertia::render('Confeitarias/Edit', compact('confeitaria'));
    }

    public function update(StoreConfeitariaRequest $request, Confeitaria $confeitaria)
    {
        $confeitaria->update($request->validated());
        return redirect()->route('confeitarias.index')->with('success', 'Confeitaria atualizada com sucesso!');
    }

    public function destroy(Confeitaria $confeitaria)
    {
        $confeitaria->delete();
        return redirect()->route('confeitarias.index')->with('success', 'Confeitaria removida com sucesso!');
    }
}
