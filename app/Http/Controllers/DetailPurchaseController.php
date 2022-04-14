<?php

namespace App\Http\Controllers;

use App\Models\DetailPurchase;
use Illuminate\Http\Request;

class DetailPurchaseController extends Controller
{
    public function index()
    {
        return DetailPurchase::all();
    }
    public function show(DetailPurchase $detailPurchase)
    {
        return $detailPurchase;
    }
    public function store(Request $request)
    {
        $detailPurchase = DetailPurchase::create($request->all());
        return response()->json($detailPurchase, 201);
    }
    public function update(Request $request, DetailPurchase $detailPurchase)
    {
        $detailPurchase->update($request->all());
        return response()->json($detailPurchase, 200);
    }
    public function delete(DetailPurchase $detailPurchase)
    {
        $detailPurchase->delete();
        return response()->json(null, 204);
    }



}
