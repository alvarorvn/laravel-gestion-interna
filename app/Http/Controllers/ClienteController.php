<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Cliente;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ClienteController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $user = auth()->user();

        $clientes = Cliente::latest()->with('creator')
            ->when(!$user->isAdmin(), fn($query)=>$query->where('created_by', $user->id))
            ->get();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(StoreClientRequest $request)
    {
        Cliente::create([
            ...$request->validated(),
            'created_by'=>auth()->id(),
        ]);

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente creado');
    }

    public function edit(Cliente $cliente)
    {
        $this->authorize('update', $cliente);

        return view('clientes.edit', compact('cliente'));
    }

    public function update(UpdateClientRequest $request, Cliente $cliente)
    {
        $this->authorize('update', $cliente);

        $cliente->update($request->validated());

        return redirect()
            ->route('clientes.index')
            ->with('succes', 'Cliente actualizado');
    }

    public function destroy(Cliente $cliente)
    {
        $this->authorize('delete', $cliente);
        $cliente->delete();

        return redirect()
            ->route('clientes.index')
            ->with('success', 'Cliente eliminado');
    }
}
