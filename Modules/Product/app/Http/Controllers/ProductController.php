<?php

namespace Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Http\Requests\ProductStoreRequest;
use Modules\Product\Http\Requests\ProductUpdateRequest;
use Modules\Product\Repositories\ProductRepository;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = (new ProductRepository())->getAllPaginate($request->all());
        return view('product::index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $productStoreRequest)
    {
        $store = (new ProductRepository())->Store($productStoreRequest->all());

        /* if ($store) {
            Alert::success('Sucesso', 'Cliente criado com sucesso');
        } */

        return redirect()->route('product.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = (new ProductRepository())->find($id);
        return view('product::edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $data = (new ProductRepository())->update($id, $request->all());
        /* if ($data) {
            Alert::success('Sucesso', 'Cliente alterado com sucesso');
        } */
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = (new ProductRepository())->destroy($id);
        /* if ($data) {
            Alert::success('Cliente excluido com sucesso!');
            return redirect()->route('client.index');
        }

        Alert::error('Erro ao excluir o cliente'); */
        return redirect()->route('product.index');
    }
}
