<?php

namespace App\Http\Controllers;


use App\Models\CelestialBody;
use Illuminate\Http\Request;

class CelestialBodyController extends Controller
{
    public function index()
    {

        return response()->json(CelestialBody::all(), 200);
    }

    public function show($id)
    {
        $body = CelestialBody::find($id);
        if (!$body) {
            return response()->json(['message' => 'Celestial body not found'], 404);
        }
        return response()->json($body, 200);
    }
}
