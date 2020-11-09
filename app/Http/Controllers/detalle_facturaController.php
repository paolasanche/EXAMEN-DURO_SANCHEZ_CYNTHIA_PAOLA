<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle_factura;
use App\Request\detalle_factura as detalle_facturaRequests;

class detalle_facturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle_facturas = detalle_facturas::all();
        return response()->json(['detalle_facturas' => $detalle_facturas ]);
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
        $detalle_factura = $this->create($Request->all());
         return $detalle_factura;
         return response()->json (new detalle_facturaRequests ($detalle_factura),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle_facturas = detalle_facturas::find($id);
        return $detalle_facturas;
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
    public function update(detalle_facturaRequest $request, detalle_factura $detalle_factura)
    {
        return $request;
       $detalle_factura->update($request->all());
       return response()->json($detalle_factura);
    } 



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
