<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Confeitaria;
use App\Http\Requests\StoreProdutoRequest;
use Inertia\Inertia;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with('confeitaria')->get();
        return Inertia::render('Produtos/Index', compact('produtos'));
    }

    public function create()
    {
        $confeitarias = Confeitaria::all();
        return Inertia::render('Produtos/Create', compact('confeitarias'));
    }

    public function store(StoreProdutoRequest $request)
    {
        Produto::create($request->validated());
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    public function show(Produto $produto)
    {
        $produto->load('confeitaria');
        return Inertia::render('Produtos/Show', compact('produto'));
    }

    public function edit(Produto $produto)
    {
        $confeitarias = Confeitaria::all();
        return Inertia::render('Produtos/Edit', compact('produto', 'confeitarias'));
    }

    public function update(StoreProdutoRequest $request, Produto $produto)
    {
        $produto->update($request->validated());
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto removido com sucesso!');
    }
}
