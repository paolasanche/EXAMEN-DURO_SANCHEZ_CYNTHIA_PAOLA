<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\Request\cliente as clienteRequests;
class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function _construct(cliente $cliente){
        $this->cliente = $cliente;
    }
    public function index()
    {
      
        $cliente = cliente::all();
        return response()->json(['cliente' => $cliente ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = $this->create($Request->all());
        return $cliente;
        return response()->json (new clienteRequests ($cliente),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = cliente::find($id);
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(clienteRequest $request, cliente $cliente)
    {
        return $request;
       $cliente->update($request->all());
       return response()->json($cliente);
    } 


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente -> delete();
        return response()->json('el registro ha sido eliminado correctamente');
    }
}
