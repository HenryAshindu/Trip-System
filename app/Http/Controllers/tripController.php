<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class tripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::all();
        return view('trip-search', compact('trips'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trip = Trip::findOrFail($id);

        return view('trip-details', compact('trip'));
    }
}
