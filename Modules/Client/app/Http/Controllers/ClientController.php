<?php

namespace Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Client\Http\Requests\ClientStoreRequest;
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
}
