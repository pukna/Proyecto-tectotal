<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailSaleController extends Controller
{
    public function index()
    {
        return DetailSale::all();
    }
    public function show(DetailSale $detailSale)
    {
        return $detailSale;
    }
    public function store(Request $request)
    {
        $detailSale = DetailSale::create($request->all());
        return response()->json($detailSale, 201);
    }
    public function update(Request $request, DetailSale $detailSale)
    {
        $detailSale->update($request->all());
        return response()->json($detailSale, 200);
    }
    public function delete(DetailSale $detailSale)
    {
        $detailSale->delete();
        return response()->json(null, 204);
    }
}
