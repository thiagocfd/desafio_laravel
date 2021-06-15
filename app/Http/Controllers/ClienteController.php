<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use Illuminate\Support\Facades\Auth;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::orderBy('name', 'asc')->paginate(10);

        return view('clientes.index', compact('clientes'));
    }

    public function search(Request $request)
    {
        $clientes = Cliente::where('name', 'like', '%' . $request->get('keyword') . '%')->orderBy('created_at', 'desc')->paginate(10);

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {


        // try {
            $data = $request->all();
            $data['user_register']=auth()->user()->name;
            $cliente = new Cliente();
            $cliente->create($data);
            $request->session()->flash('success', 'Registro gravado com sucesso!');
        // } catch (\Exception $e) {
        //     $request->session()->flash('error', 'Ocorreu um erro ao tentar gravar esses dados!');
        // }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Cliente $cliente)
    {


        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, Cliente $cliente)
    {
        try {
            $data = $request->all();
            $cliente->update($data);
            $data['user_update']=auth()->user()->name;
            $request->session()->flash('success', 'Registro atualizado com sucesso!');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Ocorreu um erro ao tentar atualizar esses dados!');
        }

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Cliente $cliente)
    {
        try {
            $cliente->delete();

            $request->session()->flash('success', 'Registro excluído com sucesso!');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'Ocorreu um erro ao tentar excluir esses dados!');
        }

        return redirect()->back();
    }
}
