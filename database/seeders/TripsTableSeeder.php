<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TripsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load JSON data
        $jsonData = file_get_contents(database_path('data/recent_trips.json')); // Adjust the path to your JSON file
        $trips = json_decode($jsonData, true); // Convert to associative array

        // Insert into the database
        foreach ($trips['trips'] as $trip) {
            DB::table('trips')->insert($trip);
        }
    }
}