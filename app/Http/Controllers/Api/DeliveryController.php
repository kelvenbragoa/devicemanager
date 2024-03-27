<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDeliveryRequest;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $searchQuery = request('query');

        $delivery = Delivery::query()
        ->when(request('query'),function($query,$searchQuery){
            $query->where('name','like',"%{$searchQuery}%");
        })
        ->orderBy('name','asc')
        ->paginate();

        return response()->json([
            'delivery' => $delivery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeliveryRequest $request)
    {
        //
        $data = $request->all();
        $delivery = Delivery::create($data);

        return response()->json([
            'delivery' => $delivery
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $delivery = Delivery::findOrFail($id);

        return response()->json([
            'delivery' => $delivery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $delivery = Delivery::findOrFail($id);

        return response()->json([
            'delivery' => $delivery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $delivery = Delivery::findOrFail($id);

        $delivery->update($data);

        return response()->json([
            'delivery' => $delivery
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delivery = Delivery::findOrFail($id);

        $delivery->delete();

        return response()->noContent();
    }
}
