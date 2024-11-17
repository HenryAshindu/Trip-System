<x-layout>
    <div class="min-h-screen bg-gray-900 text-white flex flex-col items-center py-8"
    style="background-image: url('https://images.unsplash.com/photo-1593950315186-76a92975b60c?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">
        
        <!-- Adjusted Card Width and Color -->
        <div class="bg-black bg-opacity-75 shadow-xl rounded-lg p-4 w-full max-w-2xl transform hover:scale-105 transition-transform duration-500 ease-in-out">
            <div class="mb-6 text-center">
                <h1 class="text-4xl font-extrabold text-gray-100 tracking-wider">Trip Details</h1>
                <p class="text-lg text-gray-600 mt-2">Get a complete overview of your trip!</p>
            </div>

            <!-- Trip Information Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Pick up and Drop off -->
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Pick Up Location</h2>
                    <p class="text-gray-700 text-lg">{{ $trip->pickup_location }}</p>
                </div>
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Drop Off Location</h2>
                    <p class="text-gray-700 text-lg">{{ $trip->dropoff_location }}</p>
                </div>

                <!-- Request Date/Time, Trip Start/End Time -->
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Request Date/Time</h2>
                    <p class="text-gray-700 text-lg">{{ $trip->request_date }}</p>
                </div>
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Trip Start Time</h2>
                    <p class="text-gray-700 text-lg">{{ $trip->pickup_date }}</p>
                </div>
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Trip End Time</h2>
                    <p class="text-gray-700 text-lg">{{ $trip->dropoff_date }}</p>
                </div>

                <!-- Distance, Duration, Final Price -->
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Trip Distance</h2>
                    <p class="text-gray-700 text-lg">{{ $trip->distance }} km</p>
                </div>
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Trip Duration</h2>
                    <p class="text-gray-700 text-lg">{{ $trip->duration }} minutes</p>
                </div>
                <div class="p-4 bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-md">
                    <h2 class="text-lg font-bold text-blue-800 uppercase">Trip Final Price</h2>
                    <p class="text-gray-700 text-lg">KSh {{ $trip->cost }}</p>
                </div>
            </div>

            <!-- Divider -->
            <hr class="my-6 border-gray-300">

            <!-- Driver Information Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Driver Picture -->
                <div class="flex flex-col items-center bg-gray-50 rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <img src="{{ $trip->driver_pic }}" alt="Driver Image" class="w-28 h-28 rounded-full mb-4 shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $trip->driver_name }}</h2>
                    <p class="text-lg text-gray-500">Rating: ⭐ {{ $trip->driver_rating }}</p>
                </div>

                <!-- Driver Car Picture -->
                <div class="flex flex-col items-center bg-gray-50 rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <img src="{{ $trip->car_pic }}" alt="Driver's Car" class="w-36 h-28 object-cover mb-4 shadow-lg rounded-lg">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $trip->car_make }}</h2>
                    <p class="text-lg text-gray-500">{{ $trip->car_model }} {{ $trip->car_year }}</p>
                    <p class="text-lg text-gray-500">{{ $trip->car_number }}</p>
                </div>
            </div>

            <!-- Map Section -->
            <div class="my-6">
                <h2 class="text-lg font-semibold text-blue-800 uppercase">Map of the Trip</h2>
                <div class="w-full h-64 bg-gray-200 rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://maps.google.com/maps?q={{ urlencode($trip->pickup_location) }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        class="w-full h-full rounded-lg" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mt-8">
                <a href="{{ route('trips.index') }}"
                    class="bg-gradient-to-r from-blue-500 to-green-400 text-white px-6 py-3 rounded-lg font-bold shadow-xl hover:shadow-2xl transition-transform transform hover:scale-105 duration-300">
                    Back to Search Results
                </a>
            </div>
        </div>
    </div>
</x-layout>
