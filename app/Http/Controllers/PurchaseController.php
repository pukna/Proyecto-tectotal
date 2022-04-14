<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return Purchase::all();
    }
    public function show(Purchase $purchase)
    {
        return $purchase;
    }
    public function store(Request $request)
    {
        $purchase = Purchase::create($request->all());
        return response()->json($purchase, 201);

    }
    public function update(Request $request, Purchase $purchase)
    {
        $purchase->update($request->all());
        return response()->json($purchase, 200);
    }
    public function delete(Purchase $purchase)
    {
        $purchase->delete();
        return response()->json(null, 204);
    }
}
