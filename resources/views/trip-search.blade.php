<x-layout>
    <div class="min-h-screen flex items-center justify-center p-6"
    style="background-image: url('https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;"
>
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Trip Search</h1>
            <form action="{{ route('trips.search') }}" method="GET" class="space-y-4">
                @csrf
                <!-- Keyword Search -->
                <div>
                    <label for="keyword" class="block text-gray-700 font-semibold mb-2">Keyword:</label>
                    <input type="text" name="keyword" id="keyword" placeholder="Search..." value="{{ request('keyword') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
    
                <!-- Include Canceled Trips -->
                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="include_canceled" id="include_canceled" {{ request('include_canceled') ? 'checked' : '' }} 
                    class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-400">
                    <label for="include_canceled" class="text-gray-700 font-semibold">Include Canceled Trips</label>
                </div>
    
                <!-- Distance -->
                <div>
                    <label for="distance" class="block text-gray-700 font-semibold mb-2">Distance:</label>
                    <select name="distance" id="distance" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">Any</option>
                        <option value="under_3" {{ request('distance') === 'under_3' ? 'selected' : '' }}>Under 3 km</option>
                        <option value="3-8" {{ request('distance') === '3-8' ? 'selected' : '' }}>3-8 km</option>
                        <option value="8-15" {{ request('distance') === '8-15' ? 'selected' : '' }}>8-15 km</option>
                        <option value="more_than_15" {{ request('distance') === 'more_than_15' ? 'selected' : '' }}>More than 15 km</option>
                    </select>
                </div>
    
                <!-- Time -->
                <div>
                    <label for="time" class="block text-gray-700 font-semibold mb-2">Time:</label>
                    <select name="time" id="time" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option value="">Any</option>
                        <option value="under_5" {{ request('time') === 'under_5' ? 'selected' : '' }}>Under 5 mins</option>
                        <option value="5-10" {{ request('time') === '5-10' ? 'selected' : '' }}>5-10 mins</option>
                        <option value="10-20" {{ request('time') === '10-20' ? 'selected' : '' }}>10-20 mins</option>
                        <option value="more_than_20" {{ request('time') === 'more_than_20' ? 'selected' : '' }}>More than 20 mins</option>
                    </select>
                </div>
    
                <!-- Search Button -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    
</x-layout>