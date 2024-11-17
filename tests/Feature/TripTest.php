<?php

// tests/Unit/TripTest.php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Trip;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TripTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function trip_details_page_displays_pickup_location()
    {
        $trip = Trip::factory()->create(['pickup_location' => 'Nairobi CBD']);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee($trip->pickup_location);
    }

    /**
     * @test
     */
    public function trip_details_page_displays_drop_off_location()
    {
        $trip = Trip::factory()->create(['dropoff_location' => 'Mombasa Beach']);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee($trip->dropoff_location);
    }

    /**
     * @test
     */
    public function trip_details_page_displays_request_date_time()
    {
        $trip = Trip::factory()->create(['request_date' => now()]);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee($trip->request_date->format('Y-m-d H:i'));
    }

    /**
     * @test
     */
    public function trip_details_page_displays_trip_start_time()
    {
        $trip = Trip::factory()->create(['pickup_date' => now()]);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee($trip->pickup_date->format('Y-m-d H:i'));
    }

    /**
     * @test
     */
    public function trip_details_page_displays_trip_end_time()
    {
        $trip = Trip::factory()->create(['dropoff_date' => now()]);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee($trip->dropoff_date->format('Y-m-d H:i'));
    }

    /**
     * @test
     */
    public function trip_details_page_displays_trip_distance()
    {
        $trip = Trip::factory()->create(['distance' => 100]);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee('100 km');
    }

    /**
     * @test
     */
    public function trip_details_page_displays_trip_duration()
    {
        $trip = Trip::factory()->create(['duration' => 60]);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee('60 minutes');
    }

    /**
     * @test
     */
    public function trip_details_page_displays_trip_final_price()
    {
        $trip = Trip::factory()->create(['cost' => 1000]);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee('KSh 1000');
    }

    /**
     * @test
     */
    public function trip_details_page_displays_driver_name()
    {
        $trip = Trip::factory()->create(['driver_name' => 'John Doe']);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee($trip->driver_name);
    }

    /**
     * @test
     */
    public function trip_details_page_displays_driver_rating()
    {
        $trip = Trip::factory()->create(['rating' => 4.5]);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee('Rating: ⭐ 4.5');
    }

    /**
     * @test
     */
    public function trip_details_page_displays_car_make_and_model()
    {
        $trip = Trip::factory()->create(['car_make' => 'Toyota', 'car_model' => 'Corolla']);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee('Toyota Corolla');
    }

    /**
     * @test
     */
    public function trip_details_page_displays_map_of_the_trip()
    {
        $trip = Trip::factory()->create(['pickup_location' => 'Nairobi CBD']);

        $response = $this->get(route('trips.show', $trip));

        $response->assertSee('https://maps.google.com/maps?q=' . urlencode($trip->pickup_location) . '&t=&z=13&ie=UTF8&iwloc=&output=embed');
    }
}
