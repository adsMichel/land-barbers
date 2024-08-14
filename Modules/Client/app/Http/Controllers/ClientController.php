<?php

namespace Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Client\Http\Requests\ClientStoreRequest;
use Modules\Client\Http\Requests\ClientUpdateRequest;
use Modules\Client\Repositories\ClientRepository;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /* public function index()
    {
        return view('client::index');
    } */

    public function index(Request $request)
    {
        $data = (new ClientRepository())->getAllPaginate($request->all());
        return view('client::index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client::create');
    }

    public function store(ClientStoreRequest $clientStoreRequest)
    {
        $store = (new ClientRepository())->Store($clientStoreRequest->all());

        /* if ($store) {
            Alert::success('Sucesso', 'Cliente criado com sucesso');
        } */

        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        $data = (new ClientRepository())->find($id);
        return view('client::edit', compact('data', 'id'));
    }

    public function update(ClientUpdateRequest $request, $id)
    {
        $data = (new ClientRepository())->update($id, $request->all());
        /* if ($data) {
            Alert::success('Sucesso', 'Cliente alterado com sucesso');
        } */
        return redirect()->route('client.index');
    }

    public function show()
    {
        return view('client::show');
    }

    public function destroy($id)
    {
        $data = (new ClientRepository())->destroy($id);
        /* if ($data) {
            Alert::success('Cliente excluido com sucesso!');
            return redirect()->route('client.index');
        }

        Alert::error('Erro ao excluir o cliente'); */
        return redirect()->route('client.index');
    }
}
