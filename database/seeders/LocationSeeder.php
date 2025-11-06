<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            ['name' => 'Main Office - Lobby', 'description' => 'Main building ground floor'],
            ['name' => 'Meeting Room 1', 'description' => 'First floor meeting room'],
            ['name' => 'IT Department', 'description' => 'Server and network area'],
            ['name' => 'Restroom - 2nd Floor', 'description' => 'Male & female restrooms'],
            ['name' => 'Parking Area', 'description' => 'Outdoor parking lot'],
            ['name' => 'Cafeteria', 'description' => 'Employee dining area'],
            ['name' => 'Security Post', 'description' => 'Front gate guard post'],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
