<x-layout>
    <div class="min-h-screen bg-gray-900 text-white flex flex-col items-center py-8"
        style="background-image: url('https://images.unsplash.com/photo-1726682577615-728e4272a60c?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">
        <div class="bg-black bg-opacity-75 shadow-xl rounded-lg p-6 w-full max-w-4xl">
            <h1 class="text-4xl font-bold text-gray-100 mb-6 text-center">Search Results</h1>
    
            @if($trips->isEmpty())
                <p class="text-center text-gray-300">No trips found matching your criteria.</p>
            @else
                <ul class="space-y-6">
                    @foreach($trips as $trip)
                        <!-- Make each trip item clickable -->
                        <a href="{{ route('trips.show', $trip->id) }}" class="block">
                            <li class="border border-gray-700 p-4 rounded-lg bg-gray-800 hover:bg-gray-700 transition-transform transform hover:-translate-y-1 duration-300">
                                <div class="grid grid-cols-2 gap-4">
                                    <!-- Pickup and Dropoff Locations with cost unit -->
                                    <div>
                                        <strong class="block text-gray-400">Trip Start Time:</strong>
                                        <p class="text-gray-100">{{ $trip->pickup_date }}</p>
                                    </div>
                                    <div>
                                        <strong class="block text-gray-400">Pickup:</strong>
                                        <p class="text-gray-100">{{ $trip->pickup_location }}</p>
                                    </div>
                                    <div>
                                        <strong class="block text-gray-400">Trip Final Cost:</strong>
                                        <p class="text-gray-100">KSh {{ $trip->cost }}</p>
                                    </div>
                                    <div>
                                        <strong class="block text-gray-400">Dropoff:</strong>
                                        <p class="text-gray-100">{{ $trip->dropoff_location }}</p>
                                    </div>
    
                                    <!-- Driver Info and Car -->
                                    <div>
                                        <strong class="block text-gray-400">Driver:</strong>
                                        <p class="text-gray-100">{{ $trip->driver_name }}</p>
                                    </div>
                                    <div>
                                        <strong class="block text-gray-400">Car:</strong>
                                        <p class="text-gray-100">{{ $trip->car_make }} {{ $trip->car_model }} ({{ $trip->car_number }})</p>
                                    </div>

                                    <!-- Rating -->
                                    <div>
                                        <strong class="block text-gray-400">Rating:</strong>
                                        <p class="text-gray-100">{{ $trip->driver_rating }} ⭐</p>
                                    </div>
    
                                    <!-- Status and Distance -->
                                    <div>
                                        <strong class="block text-gray-400">Status:</strong>
                                        <p class="text-gray-100">{{ $trip->status }}</p>
                                    </div>
                                </div>
                            </li>
                        </a>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Back Button -->
        <div class="text-center mt-8">
            <a href="{{ route('trips.index') }}" class="bg-yellow-500 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-600 transition-transform transform hover:-translate-y-1 duration-300">Back to Search Results</a>
        </div>
    </div>
</x-layout>
