<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bike;

class BikeController extends Controller
{
    public function index()
    {
        return response()->json(bike::all());
    }
    public function show($id)
    {
        $bike = Bike::find($id);

        if (!$bike) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($bike);
    }
}
