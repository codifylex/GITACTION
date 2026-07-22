<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ClientController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Client::class);

        $clients = Client::where('company_id', auth()->user()->company_id)
            ->orderBy('name')
            ->paginate(15);

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Client::class);

        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        $this->authorize('create', Client::class);

        Client::create([
            'company_id' => auth()->user()->company_id,
            'person_type' => $request->person_type,
            'name' => $request->name,
            'trade_name' => $request->trade_name,
            'document' => $request->document,
            'state_registration' => $request->state_registration,
            'municipal_registration' => $request->municipal_registration,
            'email' => $request->email,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'number' => $request->number,
            'complement' => $request->complement,
            'district' => $request->district,
            'city' => $request->city,
            'state' => $request->state,
            'credit_limit' => $request->credit_limit ?? 0,
            'notes' => $request->notes,
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Cliente cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $this->authorize('view', $client);

        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $this->authorize('update', $client);

        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $this->authorize('update', $client);

        $client->update([
            'person_type' => $request->person_type,
            'name' => $request->name,
            'trade_name' => $request->trade_name,
            'document' => $request->document,
            'state_registration' => $request->state_registration,
            'municipal_registration' => $request->municipal_registration,
            'email' => $request->email,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'number' => $request->number,
            'complement' => $request->complement,
            'district' => $request->district,
            'city' => $request->city,
            'state' => $request->state,
            'credit_limit' => $request->credit_limit ?? 0,
            'notes' => $request->notes,
            'active' => $request->boolean('active'),
        ]);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $this->authorize('delete', $client);

        $client->delete();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Cliente removido com sucesso.');
    }
}