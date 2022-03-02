<?php

namespace App\Http\Controllers;


use App\Models\services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Services::all();
    }
    public function show(Services $service)
    {
        return $service;
    }
    public function store(Request $request)
    {
        $service = Services::create($request->all());
        return response()->json($service, 201);
    }
    public function update(Request $request, Services $service)
    {
        $service->update($request->all());
        return response()->json($service, 200);
    }
    public function delete(Services $service)
    {
        $service->delete();
        return response()->json(null, 204);
    }
}
