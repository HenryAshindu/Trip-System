<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function __invoke(Request $request)
    {
    // Initialize the query to include completed trips by default
    $query = Trip::query()->where('status', 'COMPLETED');

    // Include canceled trips if requested
    if ($request->has('include_canceled') && $request->input('include_canceled')) {
        $query->orWhere('status', 'CANCELED');
    }

    // Apply keyword search
    if ($request->filled('keyword')) {
        $keyword = $request->input('keyword');
        $query->where(function ($q) use ($keyword) {
            $q->where('pickup_location', 'LIKE', "%{$keyword}%")
              ->orWhere('dropoff_location', 'LIKE', "%{$keyword}%")
              ->orWhere('type', 'LIKE', "%{$keyword}%")
              ->orWhere('driver_name', 'LIKE', "%{$keyword}%")
              ->orWhere('car_make', 'LIKE', "%{$keyword}%")
              ->orWhere('car_model', 'LIKE', "%{$keyword}%")
              ->orWhere('car_number', 'LIKE', "%{$keyword}%");
        });
    }

    // Filter by distance
    if ($request->filled('distance')) {
        switch ($request->input('distance')) {
            case 'under_3':
                $query->where('distance', '<=', 3);
                break;
            case '3-8':
                $query->whereBetween('distance', [3, 8]);
                break;
            case '8-15':
                $query->whereBetween('distance', [8, 15]);
                break;
            case 'more_than_15':
                $query->where('distance', '>', 15);
                break;
        }
    }

    // Filter by duration
    if ($request->filled('duration')) {
        switch ($request->input('duration')) {
            case 'under_5':
                $query->where('duration', '<=', 5);
                break;
            case '5-10':
                $query->whereBetween('duration', [5, 10]);
                break;
            case '10-20':
                $query->whereBetween('duration', [10, 20]);
                break;
            case 'more_than_20':
                $query->where('duration', '>', 20);
                break;
        }
    }

    // Get the filtered trips
    $trips = $query->get();

    // Return the search results view with the filtered trips
    return view('trip-result', compact('trips'));
    }
}