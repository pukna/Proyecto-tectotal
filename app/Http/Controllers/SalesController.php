<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return Sales::all();
    }
    public function show(Sales $sales)
    {
        return $sales;
    }
    public function store(Request $request)
    {
        $sales = Sales::create($request->all());
        return response()->json($sales, 201);

    }
    public function update(Request $request, Sales $sales)
    {
        $sales->update($request->all());
        return response()->json($sales, 200);
    }
    public function delete(Sales $sales)
    {
        $sales->delete();
        return response()->json(null, 204);
    }
}
