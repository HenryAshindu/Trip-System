# Laravel Trip Management System

## Description

This project is a **Trip Management System** built with **Laravel** and styled using **Tailwind CSS**. It provides users with an easy way to search, view, and manage trips, including details about the trip, pickup and drop-off locations, driver information, and more.

## Features

- User-friendly interface for searching trips
- Detailed trip information including:
  - Pickup and drop-off locations
  - Request date/time
  - Trip distance, duration, and final price
  - Driver information with ratings and pictures
- Google Maps integration to view trip routes
- Responsive design for mobile and desktop

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Blade, Tailwind CSS
- **Database**: MySQL (or your preferred database)
- **APIs**: Google Maps API for route visualization

## Installation

1. Clone the repository:

   git clone https://github.com/yourusername/laravel-trip-management.git
   cd laravel-trip-management

2. Install dependencies:

    composer install
    npm install

3. Set up your .env file:

    cp .env.example .env
    Edit the .env file to set up your database connection and other environment variables.

4. Generate the application key:

    php artisan key:generate

5. Run migrations to create the database tables:

    php artisan migrate

6. Seed the database with sample data (if applicable):

    php artisan db:seed

7. Serve the application:

    php artisan serve

8. Access the application at http://localhost:8000/trips.

## Usage
Navigate to the home page.
Use the trip search form to find trips based on various criteria.
Click on a trip to view detailed information, including pickup and drop-off locations, driver details, and the route on the map.
Use the "Back to Search Results" button to return to the search results.
Contributing
Contributions are welcome! If you would like to contribute to this project, please follow these steps:

## Fork the repository.
Create a new branch for your feature or bug fix.
Make your changes and commit them.
Push your branch and create a pull request.
License
This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments
Laravel
Tailwind CSS
Google Maps API
Contact
For any inquiries, please reach out to me at ngasiashindu@gmail.com


Feel free to modify any section to better fit your project's specifics!





