<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return Supplier::all();
    }
    public function show(Supplier $supplier)
    {
        return $supplier;
    }
    public function store(Request $request)
    {
        $supplier = Supplier::create($request->all());
        return response()->json($supplier, 201);
    }
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return response()->json($supplier, 200);
    }
    public function delete(Supplier $supplier)
    {
        $supplier->delete();
        return response()->json(null, 204);
    }
}
